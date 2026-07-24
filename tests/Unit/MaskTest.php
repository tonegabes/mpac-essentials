<?php

declare(strict_types=1);

use ToneGabes\MpacEssentials\Support\Mask;

it('applies a mask pattern', function () {
    $mask = new Mask;

    expect($mask->apply('12345678901', '###.###.###-##'))
        ->toBe('123.456.789-01');
});

it('stops when value runs out of characters', function () {
    $mask = new Mask;

    expect($mask->apply('123', '###.###.###-##'))->toBe('123');
});

it('returns only digits', function () {
    $mask = new Mask;

    expect($mask->onlyDigits('123.456.789-01'))->toBe('12345678901');
    expect($mask->onlyDigits(null))->toBe('');
    expect($mask->onlyDigits(''))->toBe('');
});

it('handles empty values when applying mask', function () {
    $mask = new Mask;

    expect($mask->apply(null, '###.###.###-##'))->toBe('');
    expect($mask->apply('', '###.###.###-##'))->toBe('');
});
