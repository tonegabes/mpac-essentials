<?php

declare(strict_types=1);

it('resolves helpers through the container', function () {
    expect(mpac_only_digits('12.3-4'))->toBe('1234');
    expect(mpac_mask('52998224725', '###.###.###-##'))->toBe('529.982.247-25');
    expect(mpac_cpf('52998224725'))->toBe('529.982.247-25');
});
