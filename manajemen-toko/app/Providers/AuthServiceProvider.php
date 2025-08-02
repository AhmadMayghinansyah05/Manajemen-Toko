<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // ✅ Definisikan Gate untuk Admin
        Gate::define('isAdmin', function ($user) {
            return $user->role === 'admin';
        });
    }
}
