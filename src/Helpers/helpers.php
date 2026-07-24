<?php

declare(strict_types=1);

use ToneGabes\MpacEssentials\Support\Document;
use ToneGabes\MpacEssentials\Support\Mask;
use ToneGabes\MpacEssentials\Support\Money;

if (! function_exists('mpac_only_digits')) {
    /**
     * Retorna apenas os dígitos de uma string.
     */
    function mpac_only_digits(?string $value): string
    {
        if ($value === null || $value === '') {
            return '';
        }

        return preg_replace('/\D+/', '', $value) ?? '';
    }
}

if (! function_exists('mpac_mask')) {
    /**
     * Aplica uma máscara a um valor.
     *
     * Exemplo: mpac_mask('12345678901', '###.###.###-##')
     */
    function mpac_mask(?string $value, string $pattern): string
    {
        return app(Mask::class)->apply($value, $pattern);
    }
}

if (! function_exists('mpac_cpf')) {
    /**
     * Formata um CPF (###.###.###-##).
     */
    function mpac_cpf(?string $value): string
    {
        return app(Document::class)->formatCpf($value);
    }
}

if (! function_exists('mpac_cnpj')) {
    /**
     * Formata um CNPJ (##.###.###/####-##).
     */
    function mpac_cnpj(?string $value): string
    {
        return app(Document::class)->formatCnpj($value);
    }
}

if (! function_exists('mpac_money')) {
    /**
     * Formata um valor monetário.
     */
    function mpac_money(int|float|string|null $value, ?string $currency = null): string
    {
        return app(Money::class)->format($value, $currency);
    }
}
