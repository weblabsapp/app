<?php

namespace App\Http\Controllers;

use App\Exceptions\NotFoundException;
use App\Http\Requests\VerifyEmailRequest;
use App\Repositories\AccountRepository;
use App\Repositories\CourseRepository;
use App\Repositories\TokenMappingRepository;
use App\Utils\Chain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    private AccountRepository $repository;
    private CourseRepository $courseRepository;

    /**
     * @param AccountRepository $repository
     * @param CourseRepository $courseRepository
     */
    public function __construct(AccountRepository $repository, CourseRepository $courseRepository)
    {
        $this->repository = $repository;
        $this->courseRepository = $courseRepository;
    }

    /**
     * Render login page
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function login(Request $request)
    {
        return view('login', [
            'isLoggedIn' => Auth::check()
        ]);
    }

    /**
     * @param $provider
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function socialLogin($provider, Request $request)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Social login callback
     *
     * @param $provider
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \App\Exceptions\AbstractException
     * @throws \Throwable
     */
    public function socialLoginCallback($provider, Request $request)
    {
        $user = Socialite::driver($provider)->user();

        if ($this->repository->exists(['social_type' => $provider, 'email' => $user->getEmail()])) {
            $account = $this->repository->updateSocialAccount($provider, $user->getId(), [
                'email' => $user->getEmail(),
                'name' => $user->getName(),
                'avatar' => $user->getAvatar(),
                'access_token' => $user->token,
            ]);
        } else {
            $account = $this->repository->createSocialAccount([
                'email' => $user->getEmail(),
                'name' => $user->getName(),
                'avatar' => $user->getAvatar(),
                'access_token' => $user->token,
                'is_active' => 1,
                'social_id' => $user->getId(),
                'social_type' => $provider
            ]);
        }

        Auth::login($account);

        return redirect(route('web.accountPage'));
    }

    /**
     * Logout user
     *
     * @param Request $request
     * @return \Illuminate\Routing\Redirector
     */
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect(route('web.loginPage'));
    }

    /**
     * Render signup page
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function signup(Request $request)
    {
        return view('signup', [
            'isLoggedIn' => Auth::check()
        ]);
    }

    /**
     * Render forget password page
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function forget(Request $request)
    {
        return view('forget');
    }

    /**
     * Verify email and render email verified page
     *
     * @param VerifyEmailRequest $request
     * @return \Illuminate\Contracts\View\View
     */
    public function verify(VerifyEmailRequest $request)
    {
        $chain = Chain::start()
            ->invoke([$this->repository, 'verifyEmail'], [$request->get('email')])
            ->invoke([app(TokenMappingRepository::class), 'setInactive'], [$request->get('token')])
            ->invoke([$this->repository, 'findByEmail'], [$request->get('email')]);

        Auth::login($chain::getResultOf(2), true);

        return view('account.account-verification');
    }

    /**
     * Render unsubscribe page
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function unsubscribe(Request $request)
    {
        return view('unsubscribe');
    }

    /**
     * Render account page
     *
     * @param $userName
     * @param Request|null $request
     * @return \Illuminate\Contracts\View\View
     * @throws \App\Exceptions\AbstractException
     */
    public function viewAccount($userName, Request $request = null)
    {
        if (empty($userName)) {
            $account = Auth::user();
        } else {
            $account = $this->repository->findBy('username', $userName);
        }

        if (empty($account)) {
            NotFoundException::throw();
        }

        $account->social_profiles = array_filter($account->social_profiles ?? []);

        if (!filter_var($account->avatar, FILTER_VALIDATE_URL)) {
            $account->avatar = Storage::disk('s3assets')->url($account->avatar);
        }


        // Get lessons progress for each courses
        $pendingLessons = $inProgressLessons = $completedLessons = [];
        foreach ($account->enrollments as $enrollment) {
            $lessonsProgress = $this->courseRepository->getLessonsProgress($account->id, $enrollment->course_id, false);
            $pendingLessons[$enrollment->course_id] = $lessonsProgress['pending'];
            $inProgressLessons[$enrollment->course_id] = $lessonsProgress['in_progress'];
            $completedLessons[$enrollment->course_id] = $lessonsProgress['completed'];
        }

        return view('my-account', [
            'account' => $account,
            'enrollments' => $account->enrollments,
            'pendingLessons' => $pendingLessons,
            'inProgressLessons' => $inProgressLessons,
            'completedLessons' => $completedLessons
        ]);
    }

    public function refreshSession()
    {
        return [];
    }
}
