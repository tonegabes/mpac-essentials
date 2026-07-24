<?php

declare(strict_types=1);

use ToneGabes\MpacEssentials\Support\Arr;

it('compacts empty values from arrays', function () {
    $arr = new Arr;

    expect($arr->compact([
        'name' => 'MPAC',
        'empty' => '',
        'null' => null,
        'nested' => [
            'keep' => 1,
            'drop' => null,
        ],
    ]))->toBe([
        'name' => 'MPAC',
        'nested' => [
            'keep' => 1,
        ],
    ]);
});

it('converts keys to snake_case', function () {
    $arr = new Arr;

    expect($arr->keysToSnake([
        'firstName' => 'Ana',
        'address' => [
            'zipCode' => '69900-000',
        ],
    ]))->toBe([
        'first_name' => 'Ana',
        'address' => [
            'zip_code' => '69900-000',
        ],
    ]);
});
