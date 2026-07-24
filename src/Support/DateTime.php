<?php

declare(strict_types=1);

namespace ToneGabes\MpacEssentials\Support;

use Carbon\Carbon;
use Carbon\CarbonInterface;

class DateTime
{
    /**
     * Formata uma data no padrão brasileiro (d/m/Y).
     */
    public function formatBr(CarbonInterface|string|null $value, string $format = 'd/m/Y'): string
    {
        if ($value === null || $value === '') {
            return '';
        }

        $date = $value instanceof CarbonInterface
            ? $value
            : Carbon::parse($value);

        return $date->timezone((string) config('essentials.timezone', 'America/Rio_Branco'))
            ->format($format);
    }

    /**
     * Formata data e hora no padrão brasileiro (d/m/Y H:i).
     */
    public function formatBrDateTime(CarbonInterface|string|null $value): string
    {
        return $this->formatBr($value, 'd/m/Y H:i');
    }

    /**
     * Retorna uma instância Carbon no timezone configurado do package.
     */
    public function now(): Carbon
    {
        return Carbon::now((string) config('essentials.timezone', 'America/Rio_Branco'));
    }
}
