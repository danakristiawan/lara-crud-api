<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::before(function($user, $ability) {
            if ($user->role === 'administrator') {
                return true;
            }
        });

        Gate::define('supervisor', function (User $user) {
            return $user->role === 'supervisor';
        });

        Gate::define('operator', function (User $user) {
            return $user->role === 'operator';
        });

        Gate::define('user', function (User $user) {
            return $user->role === 'user';
        });
    }
}
