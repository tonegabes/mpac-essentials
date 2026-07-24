<?php

declare(strict_types=1);

namespace ToneGabes\MpacEssentials\Support;

class Money
{
    /**
     * Formata um valor monetário conforme locale e moeda configurados.
     *
     * @param  int|float|string|null  $value  Valor numérico
     * @param  string|null  $currency  Código ISO da moeda (ex: BRL)
     * @param  string|null  $locale  Locale BCP 47 (ex: pt_BR)
     */
    public function format(
        int|float|string|null $value,
        ?string $currency = null,
        ?string $locale = null,
    ): string {
        if ($value === null || $value === '') {
            return '';
        }

        $amount = is_string($value)
            ? (float) str_replace(['.', ','], ['', '.'], preg_replace('/[^\d,.-]/', '', $value) ?? '0')
            : (float) $value;

        $currency ??= config()->string('essentials.currency', 'BRL');
        $locale ??= config()->string('essentials.locale', 'pt_BR');

        if (class_exists(\NumberFormatter::class)) {
            $formatter = new \NumberFormatter($locale, \NumberFormatter::CURRENCY);

            return $formatter->formatCurrency($amount, $currency) ?: $this->fallback($amount, $currency);
        }

        return $this->fallback($amount, $currency);
    }

    /**
     * Converte reais (float) para centavos (int).
     */
    public function toCents(int|float|string|null $value): int
    {
        if ($value === null || $value === '') {
            return 0;
        }

        $amount = is_string($value)
            ? (float) str_replace(['.', ','], ['', '.'], preg_replace('/[^\d,.-]/', '', $value) ?? '0')
            : (float) $value;

        return (int) round($amount * 100);
    }

    /**
     * Converte centavos (int) para reais (float).
     */
    public function fromCents(?int $cents): float
    {
        if ($cents === null) {
            return 0.0;
        }

        return round($cents / 100, 2);
    }

    /**
     * Fallback simples quando a extensão intl não está disponível.
     */
    private function fallback(float $amount, string $currency): string
    {
        $formatted = number_format($amount, 2, ',', '.');

        return match (strtoupper($currency)) {
            'BRL' => "R$ {$formatted}",
            'USD' => "US$ {$formatted}",
            'EUR' => "€ {$formatted}",
            default => "{$currency} {$formatted}",
        };
    }
}
