<?php

namespace App\Http\Controllers\Api;


use App\Exceptions\UnauthorizedException;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ResendVerificationEmailRequest;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\UpdateProfileAttributeRequest;
use App\Mail\VerificationEmail;
use App\Repositories\AccountRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

class AccountController extends ApiController
{
    private AccountRepository $repository;

    /**
     * @param AccountRepository $repository
     */
    public function __construct(AccountRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Create new account
     *
     * @param SignupRequest $request
     * @return \App\Http\Responses\JsonResponse
     * @throws \App\Exceptions\AbstractException
     */
    public function signup(SignupRequest $request)
    {
        $account = $this->repository->createUnique($request->json()->all());

        $this->setResponseData([
            'message' => __('please verify email address', [
                'verification_token' => $account->verifyEmailToken(),
                'send_verification_email_link_title' => __('send verification email link title')
            ]),
            'show_toast' => true
        ]);

        return $this->response();
    }

    /**
     * Attempt to login user
     *
     * @param LoginRequest $request
     * @return \App\Http\Responses\JsonResponse
     * @throws \App\Exceptions\AbstractException
     */
    public function login(LoginRequest $request)
    {
        $isLoggedIn = Auth::attempt([
            'email' => $request->post('email'),
            'password' => $request->post('password')
        ], $request->post('remember_me'));

        if (!$isLoggedIn) {
            UnauthorizedException::throw('invalid login');
        }

        Auth::user()->generateAccessToken();

        $this->setResponseData([
            'message' => __('login success'),
            'access_token' => Auth::user()->getAccessToken(),
            'expires_in' => $this->getAccessTokenTtl(),
            'remember_token' => Auth::user()->getRememberToken(),
            'show_toast' => true,
        ]);

        return $this->response();
    }

    /**
     * Resend verification email
     *
     * @param ResendVerificationEmailRequest $request
     * @return \App\Http\Responses\JsonResponse
     * @throws \App\Exceptions\AbstractException
     */
    public function resendVerificationEmail(ResendVerificationEmailRequest $request)
    {
        $decryptedToken = Crypt::decrypt($request->get('token'));

        $account = $this->repository->findByEmail($decryptedToken['email']);

        Mail::to($account->email)->send(app(VerificationEmail::class, [
            'account' => $account
        ]));

        $this->setResponseData([
            'status' => 'success',
            'message' => 'verification_email_sent_successfully',
            'show_toast' => true
        ]);

        return $this->response();
    }

    /**
     * Update profile attribute
     *
     * @param $attribute
     * @param UpdateProfileAttributeRequest $request
     * @return \App\Http\Responses\JsonResponse
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function updateAttribute($attribute, UpdateProfileAttributeRequest $request)
    {
        $attributeValue = $request->json()->all();

        $this->repository->updateAttribute(Auth::user(), array_combine(
            $attributeValue['updated_attributes'],
            collect($attributeValue)->only($attributeValue['updated_attributes'])->all()
        ));

        $attributeValue[$attribute] = Auth::user()->$attribute;

        $this->setResponseData($attributeValue);

        return $this->response();
    }

    public function saveSocialProfiles(Request $request)
    {

    }

    /**
     * Get access token TTL
     *
     * @return Carbon
     */
    protected function getAccessTokenTtl()
    {
        return Carbon::now()->addSeconds(env('ACCESS_TOKEN_TTL', 86400));
    }
}
