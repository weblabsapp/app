<?php

namespace App\Repositories;


use App\Exceptions\AlreadyVerifiedException;
use App\Exceptions\DuplicateEntityException;
use App\Exceptions\NotFoundException;
use App\Exceptions\ProcessingFailedException;
use App\Models\Account;
use Carbon\Carbon;
use Czim\Repository\BaseRepository;
use Czim\Repository\Criteria\Common\Custom;
use Illuminate\Database\QueryException;
use Laravel\Socialite\Contracts\User;

class AccountRepository extends BaseRepository
{
    /**
     * Returns specified model class name.
     *
     * @return string
     */
    public function model()
    {
        return Account::class;
    }

    /**
     * Create a unique account
     *
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model|Account
     * @throws \App\Exceptions\AbstractException
     */
    public function createUnique(array $data = [])
    {
        /** @var Account $account */
        $account = parent::findBy('email', $data['email']);

        if ($account) {
            DuplicateEntityException::throw('user already exist', [
                'forget_password_link' => get_route('web.forgetPasswordPage', [
                    'token' => $account->forgetPasswordToken()
                ], false),
                'forget_password_link_title' => __('forget password')
            ]);
        }

        return parent::create($data);
    }

    /**
     * Create a social login account
     *
     * @param array $data
     * @return Account
     * @throws \Throwable
     */
    public function createSocialAccount(array $data)
    {
        try {
            $this->make($data)->saveOrFail();
            return $this->findBy('email', $data['email']);
        } catch (QueryException $exception) {
            if ($exception->getCode() == "23000") {
                throw new \Exception(__('duplicate email'));
            }
            throw $exception;
        }
    }

    /**
     * Update a social login account
     *
     * @param string $provider
     * @param string $socialId
     * @param array $data
     * @return Account
     * @throws \App\Exceptions\AbstractException
     * @throws \Throwable
     */
    public function updateSocialAccount(string $provider, string $socialId, array $data)
    {
        /** @var Account $account */
        $account = $this->query()
            ->where('social_type', $provider)
            ->where('social_id', $socialId);

        if (!$account) {
            NotFoundException::throw('entity not found or maybe deleted');
        }

        $account->updateOrFail($data);

        return $account;
    }

    /**
     * Find account by email
     *
     * @param string $email
     * @return Account
     * @throws \App\Exceptions\AbstractException
     */
    public function findByEmail(string $email)
    {
        $account = $this->findBy('email', $email);

        if (!$account) {
            NotFoundException::throw('user not found');
        }

        return $account;
    }

    /**
     * Verify email address
     *
     * @param string $email
     * @return void
     * @throws \App\Exceptions\AbstractException
     */
    public function verifyEmail(string $email)
    {
        $this->pushCriteriaOnce(new Custom(function ($model) {
            return $model->onlyInactive();
        }));

        $account = $this->findByEmail($email);

        $isVerified = $account->update([
            'email_verified_at' => Carbon::now()->toDateTimeString(),
            'email_verification_token' => null,
            'is_active' => true
        ]);

        if (!$isVerified) {
            ProcessingFailedException::throw('failed to verify email');
        }
    }

    /**
     * Check if account exists by custom criteria
     * Examples:
     * 1. exists(['email' => 'a@b.com', 'id' => '12345'])
     * 2. exists(['name' => 'John Doe', 'country' => 'United States'])
     *
     * @param array $data
     * @return bool
     */
    public function exists(array $data)
    {
        $query = parent::query();

        foreach ($data as $field => $value) {
            $query->where($field, $value);
        }

        return $query->exists();
    }

    /**
     * Update account attribute
     *
     * @param Account $account
     * @param string $attribute
     * @param $value
     * @return Account
     * @throws \Throwable
     */
    public function updateAttribute(Account $account, array $attributes)
    {
        foreach ($attributes as $attribute => $value) {
            $account->setAttribute($attribute, $value);
        }

        $account->updateOrFail();

        return $account;
    }

    /**
     * Update social profiles for an account
     *
     * @param Account $account
     * @param array $socialProfiles
     * @return \Illuminate\Database\Eloquent\Model|null
     * @throws \Throwable
     */
    public function updateSocialProfiles(Account $account, array $socialProfiles = [])
    {
        $account->updateOrFail(['social_profiles' => $socialProfiles]);

        return $account;
    }
}
