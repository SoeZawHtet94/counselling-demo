<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

// use App\Models\Passport\AuthCode;
// use App\Models\Passport\Client;
// use App\Models\Passport\PersonalAccessClient;
// use App\Models\Passport\Token;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
       
        // Passport::loadKeysFrom('/secret-keys/oauth');
        Gate::define('comment-delete', function($user, $comment) {
            return $user->id == $comment->user_id;
        });
        Passport::routes();

    }
}
