<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;

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

        $user = \Auth::user();

        //Auth gates for: Venda management
        Gate::define('venda', function ($user) {
            return in_array($user->role, ['admin_venda','funcionario_venda'])
                    ? Response::allow()
                    : Response::deny('Sem permissão de realizar Venda');
        });
        //Auth gates for: Monitoramento management
        Gate::define('monitoramento', function ($user) {
            return in_array($user->role, ['admin','funcionario'])
            ? Response::allow()
            : Response::deny('Sem permissão de fazer Monitoramento');
        });
        //Auth gates for: Monitoramento relatorio
        Gate::define('relatorio_monitoramento', function ($user) {
            return in_array($user->role, ['admin','funcionario','cliente']);
        });

        //Auth gates for: Venda relatorio
        Gate::define('relatorio_venda', function ($user) {
            return in_array($user->role, ['admin_venda','funcionario_venda','cliente']);
        });
        //Auth gates for: Listar User
        Gate::define('listar_user', function ($user) {
            return in_array($user->role, ['admin_venda','funcionario_venda','admin','funcionario']);
        });
        //Auth gates for:  For Admins
        Gate::define('forAdmins', function ($user) {
            return in_array($user->role, ['admin_venda','admin'])
                    ? Response::allow()
                    : Response::deny('Permitido apenas para administradores.');
        });

        // admin user role
        Gate::define('isAdmin', function($user){
            return $user->role == 'admin'
                        ? Response::allow()
                        : Response::deny('Permitido apenas para o administrador.');
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
        // posto user Admin_venda
        Gate::define('isAdmin_venda', function($user){
            return $user->role == 'admin_venda';
        });
        // posto user Funcionario_venda
        Gate::define('isFuncionario_venda', function($user){
            return $user->role == 'funcionario_venda';
        });
    }
}
