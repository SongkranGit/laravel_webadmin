<?php

namespace App\Providers;

use App\Repositories\IRoleRepository;
use App\Repositories\IUserRepository;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;


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

        if ($this->app->environment() !== 'production') {
            $this->app->register(\Way\Generators\GeneratorsServiceProvider::class);
            $this->app->register(\Xethron\MigrationsGenerator\MigrationsGeneratorServiceProvider::class);
        }


         //Repositories
        $this->app->singleton(IUserRepository::class , UserRepository::class );
        $this->app->singleton(IRoleRepository::class , RoleRepository::class);

    }
}
