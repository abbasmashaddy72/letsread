<?php

namespace App\Providers;

use Illuminate\Support\Arr;
use App\Settings\SitesSettings;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(SitesSettings $siteSettings): void
    {
        // Skip execution during migrations
        if ($this->app->runningInConsole()) {
            return;
        }
        // Set dynamic values for name and timezone with fallbacks
        config(['app.name' => $siteSettings->name ?? config('app.name')]);
        config(['app.timezone' => $siteSettings->timezone ?? config('app.timezone')]);
    }
}
