<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
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

        // admin user role
        Gate::define('isAdmin', function($user){
            return $user->role == 'admin';
        });
        // user role
        Gate::define('isCliente', function($user){
            return $user->role == 'cliente';
        });
        // funcionario role
        Gate::define('isFuncionario', function($user){
            return $user->role == 'funcionario';
        });
        // forAll user role (everybody can acess)
        Gate::define('forAll', function($user){
            return $user;
        });
        // posto user role
        Gate::define('isPosto', function($user){
            return $user->role == 'posto';
        });
    }
}
