<?php

declare(strict_types=1);

namespace ToneGabes\MpacEssentials\Facades;

use Illuminate\Support\Facades\Facade;
use ToneGabes\MpacEssentials\Support\Mask;

/**
 * @method static string apply(?string $value, string $pattern)
 * @method static string onlyDigits(?string $value)
 *
 * @see Mask
 */
class MaskFacade extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'tonegabes.mpac-essentials.mask';
    }
}
