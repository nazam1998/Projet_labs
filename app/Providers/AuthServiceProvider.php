<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\User' => 'App\Policies\UserPolicy',
        'App\Comment' => 'App\Policies\CommentPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function ($user) {
            return $user->role_id==1;
        });
        Gate::define('ceo',function($user){
            return $user->role_id==2;
        });
        Gate::define('manage-article',function($user){

            return $user->role_id<=4 && $user->role_id !=2;
            
        });
        Gate::define('add-article', function ($user) {

            return $user->role_id==3 || $user->role_id==4;
        
        });
        Gate::define('validate-article', function ($user) {

            return $user->role_id==4;
        
        });
        Gate::define('edit-article', function ($user,$article) {

            return ($user->role_id==3 && $article->user_id==$user->id) || $user->role_id==4;
        
        });
        Gate::define('manage-user', function ($user) {

            return $user->role_id==4 || $user->role_id==2;
        
        });
        
        Gate::define('change', function ($user) {

            return $user->role_id==4 || $user->role_id==1;
        
        });
        


        //
    }
}
