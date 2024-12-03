<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //to disable all mass assignment restrictions:
        Model::unguard();

        Gate::define('admin',function(User $user){
            //Gate Logic:if the user email equals sara@admin.com then you are the admin
            return $user->email == 'sara@admin.com';

        });
        //checking if we have a user and if he is an admin:
        Blade::if('admin',function(){
            return request()->user()?->can('admin');
        });
    }
}
