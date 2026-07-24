<?php

declare(strict_types=1);

use ToneGabes\MpacEssentials\Support\Money;

it('converts reais to cents', function () {
    $money = new Money;

    expect($money->toCents(10.5))->toBe(1050);
    expect($money->toCents('10,50'))->toBe(1050);
    expect($money->toCents(null))->toBe(0);
    expect($money->toCents(''))->toBe(0);
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

it('formats money using package config defaults', function () {
    $money = new Money;

    expect($money->format(99.9))->toContain('99,90');
});

it('returns empty string for null or empty values', function () {
    $money = new Money;

    expect($money->format(null))->toBe('');
    expect($money->format(''))->toBe('');
});
