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
        \App\Models\AccessLog::class   =>  \App\Policies\ActionPolicy::class,
        \App\Models\Article::class     =>  \App\Policies\ActionPolicy::class,
        \App\Models\Category::class    =>  \App\Policies\ActionPolicy::class,
        \App\Models\Component::class   =>  \App\Policies\ActionPolicy::class,
        \App\Models\Email::class       =>  \App\Policies\EmailPolicy::class,
        \App\Models\Menu::class        =>  \App\Policies\ActionPolicy::class,
        \App\Models\Module::class      =>  \App\Policies\ActionPolicy::class,
        \App\Models\Permission::class  =>  \App\Policies\ActionPolicy::class,
        \App\Models\Role::class        =>  \App\Policies\ActionPolicy::class,
        \App\Models\User::class        =>  \App\Policies\UserPolicy::class,
        \App\Models\Setting::class     =>  \App\Policies\ActionPolicy::class,
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
