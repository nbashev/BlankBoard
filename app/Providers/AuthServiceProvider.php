<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        \App\Models\User::class        =>  \App\Policies\UserPolicy::class,
        \App\Models\Role::class        =>  \App\Policies\ResourcePolicy::class,
        \App\Models\Permission::class  =>  \App\Policies\ResourcePolicy::class,
        \App\Models\Email::class       =>  \App\Policies\EmailPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
