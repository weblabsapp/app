<?php

namespace App\Providers;

use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if(env('APP_DEBUG')) {
            DB::listen(function($query) {
                $bindings = array_map(function ($binding) {
                    if ($binding instanceof \DateTime) {
                        $binding = $binding->format(\DateTimeInterface::RFC3339);
                    }
                    return $binding;
                }, $query->bindings);

                File::append(
                    storage_path('logs/query.log'),
                    $query->sql . ' [' . implode(', ', $bindings) . ']' . PHP_EOL
                );
            });
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('edit-profile-attributes', function (Account $account) {
            return Auth::id() === $account->id || Auth::user()->admin;
        });

        Gate::define('edit-social-profiles', function (Account $account) {
            return Auth::id() === $account->id || Auth::user()->admin;
        });

        Gate::define('update-avatar', function (Account $account) {
            return Auth::id() === $account->id || Auth::user()->admin;
        });

        Blade::directive('quote', function () {
            return '<?php $quote = \App\Factories\Quote::factory()->getRandomQuote();
                echo sprintf(\'<div class="card bg-transparent border-0">
                                    <div class="d-flex">
                                        <div class="img-fluid rounded-circle quote-author-image" style="--bg-image: url(%s);"></div>
                                        <div class="ml-3 w-100 text-left">
                                            <p class="m-0">%s</p>
                                            <p class="blockquote-footer">%s</p>
                                        </div>
                                    </div>
                                </div>\', $quote[\'avatar\'], $quote[\'quote\'], $quote[\'by\'])?>';
        });
    }
}
