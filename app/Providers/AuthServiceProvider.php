<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Passport as ModelsPassport;
use Laravel\Passport\Passport;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
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

        // if(!$this->app->routesAreCached()){
        //     Passport::routes();
        // }

        // Passport::tokenExpiresIn(now()->addDays(1));
        // Passport::refreshTokensExpireIn(now()->addDays(30));
        // Passport::personalAccessTokensExpiredIn(now()->addMonths(6));
        Passport::tokensCan([
            'view-user' => "View User informations"
        ]);

        Passport::useClientModel(ModelsPassport::class);
    }
}
