<?php

declare(strict_types=1);

namespace ToneGabes\MpacEssentials;

use Illuminate\Support\ServiceProvider;
use ToneGabes\MpacEssentials\Support\Arr;
use ToneGabes\MpacEssentials\Support\DateTime;
use ToneGabes\MpacEssentials\Support\Document;
use ToneGabes\MpacEssentials\Support\Mask;
use ToneGabes\MpacEssentials\Support\Money;

class EssentialsServiceProvider extends ServiceProvider
{
    /**
     * Register package bindings.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/essentials.php',
            'essentials'
        );

        $this->app->singleton(Mask::class);
        $this->app->singleton(Document::class);
        $this->app->singleton(Money::class);
        $this->app->singleton(DateTime::class);
        $this->app->singleton(Arr::class);

        $this->app->alias(Mask::class, 'tonegabes.mpac-essentials.mask');
        $this->app->alias(Document::class, 'tonegabes.mpac-essentials.document');
        $this->app->alias(Money::class, 'tonegabes.mpac-essentials.money');
        $this->app->alias(DateTime::class, 'tonegabes.mpac-essentials.datetime');
        $this->app->alias(Arr::class, 'tonegabes.mpac-essentials.arr');
    }

    /**
     * Bootstrap package services.
     */
    public function boot(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/essentials.php' => config_path('essentials.php'),
        ], 'essentials-config');
    }
}
