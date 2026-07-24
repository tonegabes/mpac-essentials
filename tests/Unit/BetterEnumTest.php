<?php

declare(strict_types=1);

use ToneGabes\MpacEssentials\Traits\BetterEnum;

enum StatusEnum: string
{
    use BetterEnum;

    case Pending = 'pending';
    case Approved = 'approved';
    case Rejected = 'rejected';
}

it('returns enum names', function () {
    expect(StatusEnum::names())->toBe(['Pending', 'Approved', 'Rejected']);
});

it('returns enum values', function () {
    expect(StatusEnum::values())->toBe(['pending', 'approved', 'rejected']);
});

it('returns enum options as name => value', function () {
    expect(StatusEnum::options())->toBe([
        'Pending' => 'pending',
        'Approved' => 'approved',
        'Rejected' => 'rejected',
    ]);
});

it('returns enum as array', function () {
    expect(StatusEnum::asArray())->toBe([
        'Pending' => 'pending',
        'Approved' => 'approved',
        'Rejected' => 'rejected',
    ]);
});

it('returns a random enum case', function () {
    expect(StatusEnum::random())->toBeInstanceOf(StatusEnum::class);
});
