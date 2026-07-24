<?php

declare(strict_types=1);

use ToneGabes\MpacEssentials\Support\Document;

it('formats a valid cpf', function () {
    $document = new Document;

    expect($document->formatCpf('52998224725'))->toBe('529.982.247-25');
});

it('returns original value when cpf length is invalid', function () {
    $document = new Document;

    expect($document->formatCpf('123'))->toBe('123');
    expect($document->formatCpf(null))->toBe('');
});

it('validates cpf check digits', function () {
    $document = new Document;

    expect($document->isValidCpf('529.982.247-25'))->toBeTrue();
    expect($document->isValidCpf('111.111.111-11'))->toBeFalse();
    expect($document->isValidCpf('12345678900'))->toBeFalse();
});

it('formats a valid cnpj', function () {
    $document = new Document;

    expect($document->formatCnpj('11222333000181'))->toBe('11.222.333/0001-81');
});

it('returns original value when cnpj length is invalid', function () {
    $document = new Document;

    expect($document->formatCnpj('123'))->toBe('123');
    expect($document->formatCnpj(null))->toBe('');
});

it('validates cnpj check digits', function () {
    $document = new Document;

    expect($document->isValidCnpj('11.222.333/0001-81'))->toBeTrue();
    expect($document->isValidCnpj('00.000.000/0000-00'))->toBeFalse();
});
