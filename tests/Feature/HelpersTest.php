<?php

declare(strict_types=1);

it('resolves helpers through the container', function () {
    expect(mpac_only_digits('12.3-4'))->toBe('1234');
    expect(mpac_mask('52998224725', '###.###.###-##'))->toBe('529.982.247-25');
    expect(mpac_cpf('52998224725'))->toBe('529.982.247-25');
    expect(mpac_cnpj('11222333000181'))->toBe('11.222.333/0001-81');
    expect(mpac_money(1234.56, 'BRL'))->toContain('1.234,56');
});

it('handles empty values in helpers', function () {
    expect(mpac_only_digits(null))->toBe('');
    expect(mpac_mask(null, '###.###.###-##'))->toBe('');
    expect(mpac_cpf(null))->toBe('');
    expect(mpac_cnpj(null))->toBe('');
    expect(mpac_money(null))->toBe('');
});
