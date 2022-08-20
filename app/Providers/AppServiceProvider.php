<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
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
                File::append(
                    storage_path('logs/query.log'),
                    $query->sql . ' [' . implode(', ', $query->bindings) . ']' . PHP_EOL
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
