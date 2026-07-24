<?php

declare(strict_types=1);

namespace ToneGabes\MpacEssentials\Support;

class Document
{
    public function __construct(
        private readonly Mask $mask = new Mask,
    ) {
    }

    /**
     * Formata um CPF no padrão ###.###.###-##.
     */
    public function formatCpf(?string $value): string
    {
        $digits = $this->mask->onlyDigits($value);

        if (strlen($digits) !== 11) {
            return $value ?? '';
        }

        return $this->mask->apply($digits, '###.###.###-##');
    }

    /**
     * Formata um CNPJ no padrão ##.###.###/####-##.
     */
    public function formatCnpj(?string $value): string
    {
        $digits = $this->mask->onlyDigits($value);

        if (strlen($digits) !== 14) {
            return $value ?? '';
        }

        return $this->mask->apply($digits, '##.###.###/####-##');
    }

    /**
     * Valida se o CPF é válido (dígitos verificadores).
     */
    public function isValidCpf(?string $value): bool
    {
        $cpf = $this->mask->onlyDigits($value);

        if (strlen($cpf) !== 11 || preg_match('/^(\d)\1{10}$/', $cpf)) {
            return false;
        }

        for ($t = 9; $t < 11; $t++) {
            $sum = 0;

            for ($i = 0; $i < $t; $i++) {
                $sum += (int) $cpf[$i] * (($t + 1) - $i);
            }

            $digit = ((10 * $sum) % 11) % 10;

            if ((int) $cpf[$t] !== $digit) {
                return false;
            }
        }

        return true;
    }

    /**
     * Valida se o CNPJ é válido (dígitos verificadores).
     */
    public function isValidCnpj(?string $value): bool
    {
        $cnpj = $this->mask->onlyDigits($value);

        if (strlen($cnpj) !== 14 || preg_match('/^(\d)\1{13}$/', $cnpj)) {
            return false;
        }

        $weights1 = [5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
        $weights2 = [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];

        $sum = 0;
        for ($i = 0; $i < 12; $i++) {
            $sum += (int) $cnpj[$i] * $weights1[$i];
        }

        $remainder = $sum % 11;
        $digit1 = $remainder < 2 ? 0 : 11 - $remainder;

        if ((int) $cnpj[12] !== $digit1) {
            return false;
        }

        $sum = 0;
        for ($i = 0; $i < 13; $i++) {
            $sum += (int) $cnpj[$i] * $weights2[$i];
        }

        $remainder = $sum % 11;
        $digit2 = $remainder < 2 ? 0 : 11 - $remainder;

        return (int) $cnpj[13] === $digit2;
    }
}
