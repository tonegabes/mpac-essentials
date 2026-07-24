<?php

declare(strict_types=1);

namespace ToneGabes\MpacEssentials\Facades;

use Illuminate\Support\Facades\Facade;
use ToneGabes\MpacEssentials\Support\Money;

/**
 * @method static string format(int|float|string|null $value, ?string $currency = null, ?string $locale = null)
 * @method static int toCents(int|float|string|null $value)
 * @method static float fromCents(?int $cents)
 *
 * @see Money
 */
class MoneyFacade extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'tonegabes.mpac-essentials.money';
    }
}
