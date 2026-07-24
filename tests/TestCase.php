<?php

declare(strict_types=1);

namespace ToneGabes\MpacEssentials\Tests;

use ToneGabes\MpacEssentials\EssentialsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    /**
     * @param  \Illuminate\Foundation\Application  $app
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            EssentialsServiceProvider::class,
        ];
    }

    /**
     * @param  \Illuminate\Foundation\Application  $app
     */
    protected function defineEnvironment($app): void
    {
        $app['config']->set('essentials.locale', 'pt_BR');
        $app['config']->set('essentials.currency', 'BRL');
        $app['config']->set('essentials.timezone', 'America/Rio_Branco');
    }
}
