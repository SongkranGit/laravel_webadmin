<?php

namespace App\Providers;

use App\Repositories\IUserRepository;
use App\Repositories\UserRepository;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
 * Bootstrap any application services.
 *
 * @return void
 */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {


        /**
         * Services
         * */





        /**
         * Repositories
         *
         * */

        $this->app->singleton(  IUserRepository::class ,  UserRepository::class );
    }
}
