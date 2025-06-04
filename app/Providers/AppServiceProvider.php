<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Tournament;
use App\Policies\TournamentPolicy;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }



protected $policies = [
    Tournament::class => TournamentPolicy::class,
];

}
