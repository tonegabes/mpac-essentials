<?php

declare(strict_types=1);

namespace ToneGabes\MpacEssentials\Facades;

use Illuminate\Support\Facades\Facade;
use ToneGabes\MpacEssentials\Support\Document;

/**
 * @method static string formatCpf(?string $value)
 * @method static string formatCnpj(?string $value)
 * @method static bool isValidCpf(?string $value)
 * @method static bool isValidCnpj(?string $value)
 *
 * @see Document
 */
class DocumentFacade extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'tonegabes.mpac-essentials.document';
    }
}
