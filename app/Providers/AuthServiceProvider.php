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
            if ($user->role === 'admin') {
                return true;
            }
        });

        Gate::define('manager', function (User $user) {
            return $user->role === 'manager';
        });

        Gate::define('user', function (User $user) {
            return $user->role === 'user';
        });
    }
}
