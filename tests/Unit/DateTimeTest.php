<?php

declare(strict_types=1);

use Carbon\Carbon;
use ToneGabes\MpacEssentials\Support\DateTime;

it('formats dates in brazilian pattern', function () {
    $dateTime = new DateTime;
    $value = Carbon::parse('2026-07-24 12:00:00', 'America/Rio_Branco');

    expect($dateTime->formatBr($value))->toBe('24/07/2026');
});

it('formats date and time in brazilian pattern', function () {
    $dateTime = new DateTime;
    $value = Carbon::parse('2026-07-24 15:30:00', 'America/Rio_Branco');

    expect($dateTime->formatBrDateTime($value))->toBe('24/07/2026 15:30');
});

it('returns empty string for null or empty values', function () {
    $dateTime = new DateTime;

    expect($dateTime->formatBr(null))->toBe('');
    expect($dateTime->formatBr(''))->toBe('');
});

it('returns now in the configured timezone', function () {
    $dateTime = new DateTime;

    expect($dateTime->now()->timezoneName)->toBe('America/Rio_Branco');
});
