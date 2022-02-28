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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function($user) {
            return $user->hasRole('admin');
         });
        
         /* define a manager user role */
         Gate::define('isManager', function($user) {
            return $user->hasRole('manager');
         });
       
         /* define a supervisor role */
         Gate::define('isSupervisor', function($user) {
            return $user->hasRole('supervisor');
         });
         
         /* define a director role */
         Gate::define('isDirector', function($user) {
            return $user->hasRole('director');
         });
    }
}
