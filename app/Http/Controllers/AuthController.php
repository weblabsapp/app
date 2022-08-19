<?php

namespace App\Http\Controllers;

use App\Http\Requests\VerifyEmailRequest;
use App\Repositories\AccountRepository;
use App\Repositories\TokenMappingRepository;
use App\Utils\Chain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    /**
     * @var AccountRepository
     */
    private $repository;

    /**
     * @param AccountRepository $repository
     */
    public function __construct(AccountRepository $repository)
    {
        $this->repository = $repository;
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

    public function socialLogin($provider, Request $request)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function socialLoginCallback($provider, Request $request)
    {
        $user = Socialite::driver($provider)->user();

        if ($this->repository->exists(['email' => $user->getEmail()])) {
            $account = $this->repository->updateSocialAccount($user->getId(), [
                'email' => $user->getEmail(),
                'name' => $user->getName(),
                'access_token' => $user->token,
            ]);
        } else {
            $account = $this->repository->createSocialAccount([
                'email' => $user->getEmail(),
                'name' => $user->getName(),
                'social_id' => $user->getId(),
                'social_type' => $provider
            ]);
        }

        $account->generateAccessToken();

        Auth::login($account);

        return redirect(route('web.myAccountPage'));
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
        return view('signup');
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

        return view('account-verification');
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
     * Render my account page
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function myAccount(Request $request)
    {
        return view('my-account');
    }

    public function refreshSession()
    {
        return [];
    }
}
