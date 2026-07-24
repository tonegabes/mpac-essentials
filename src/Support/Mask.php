<?php

declare(strict_types=1);

namespace ToneGabes\MpacEssentials\Support;

class Mask
{
    /**
     * Aplica uma máscara a um valor.
     *
     * Caracteres `#` são substituídos pelos dígitos/caracteres do valor.
     * Demais caracteres do padrão são preservados.
     *
     * @param  string|null  $value  Valor a ser mascarado
     * @param  string  $pattern  Padrão da máscara (ex: ###.###.###-##)
     */
    public function apply(?string $value, string $pattern): string
    {
        if ($value === null || $value === '') {
            return '';
        }

        $result = '';
        $valueIndex = 0;
        $length = strlen($value);

        for ($i = 0, $patternLength = strlen($pattern); $i < $patternLength; $i++) {
            if ($valueIndex >= $length) {
                break;
            }

            if ($pattern[$i] === '#') {
                $result .= $value[$valueIndex];
                $valueIndex++;
                continue;
            }

            $result .= $pattern[$i];
        }

        return $result;
    }

    /**
     * Remove todos os caracteres não numéricos.
     */
    public function onlyDigits(?string $value): string
    {
        if ($value === null || $value === '') {
            return '';
        }

        return preg_replace('/\D+/', '', $value) ?? '';
    }
}
