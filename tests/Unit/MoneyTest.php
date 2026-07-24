<?php

declare(strict_types=1);

use ToneGabes\MpacEssentials\Support\Money;

it('converts reais to cents', function () {
    $money = new Money;

    expect($money->toCents(10.5))->toBe(1050);
    expect($money->toCents(null))->toBe(0);
});

it('converts cents to reais', function () {
    $money = new Money;

    expect($money->fromCents(1050))->toBe(10.5);
    expect($money->fromCents(null))->toBe(0.0);
});

it('formats money with brl fallback', function () {
    $money = new Money;

    expect($money->format(1234.56, 'BRL'))->toContain('1.234,56');
});
