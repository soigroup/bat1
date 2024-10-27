<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; // إضافة هذا السطر
use Laravel\Sanctum\PersonalAccessToken;
use Laravel\Sanctum\Sanctum;

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
        // تعيين الطول الافتراضي للسلاسل النصية
        Schema::defaultStringLength(191); // إضافة هذا السطر

        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
    }
}
