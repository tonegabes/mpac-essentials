<?php

declare(strict_types=1);

namespace ToneGabes\MpacEssentials\Support;

class Arr
{
    /**
     * Remove chaves com valores null, string vazia ou arrays vazios.
     *
     * @param  array<string|int, mixed>  $array
     * @return array<string|int, mixed>
     */
    public function compact(array $array, bool $recursive = true): array
    {
        $result = [];

        foreach ($array as $key => $value) {
            if ($recursive && is_array($value)) {
                $value = $this->compact($value, true);
            }

            if ($value === null || $value === '' || $value === []) {
                continue;
            }

            $result[$key] = $value;
        }

        return $result;
    }

    /**
     * Converte chaves do array para snake_case.
     *
     * @param  array<string|int, mixed>  $array
     * @return array<string|int, mixed>
     */
    public function keysToSnake(array $array, bool $recursive = true): array
    {
        $result = [];

        foreach ($array as $key => $value) {
            $newKey = is_string($key)
                ? strtolower((string) preg_replace('/(?<!^)[A-Z]/', '_$0', $key))
                : $key;

            if ($recursive && is_array($value)) {
                $value = $this->keysToSnake($value, true);
            }

            $result[$newKey] = $value;
        }

        return $result;
    }
}
