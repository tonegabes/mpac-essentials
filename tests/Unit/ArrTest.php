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

it('keeps empty nested arrays when recursion is disabled', function () {
    $arr = new Arr;

    expect($arr->compact([
        'name' => 'MPAC',
        'nested' => [
            'drop' => null,
        ],
    ], recursive: false))->toBe([
        'name' => 'MPAC',
        'nested' => [
            'drop' => null,
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

it('preserves nested keys when recursion is disabled', function () {
    $arr = new Arr;

    expect($arr->keysToSnake([
        'firstName' => 'Ana',
        'address' => [
            'zipCode' => '69900-000',
        ],
    ], recursive: false))->toBe([
        'first_name' => 'Ana',
        'address' => [
            'zipCode' => '69900-000',
        ],
    ]);
});
