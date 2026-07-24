# MPAC Essentials

Package Laravel com utilidades compartilhadas para os projetos da organização.

## Requisitos

- PHP 8.2+
- Laravel 11 ou 12

## Instalação

```bash
composer require tonegabes/mpac-essentials
```

Em repositórios privados (GitLab/Composer Satis/VCS), configure o repositório no `composer.json` do projeto consumidor:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "git@gitlab.com:tonegabes/mpac-essentials.git"
    }
  ]
}
```

O ServiceProvider é auto-descoberto. Para publicar a config:

```bash
php artisan vendor:publish --tag=essentials-config
```

## Uso rápido

```php
use ToneGabes\MpacEssentials\Facades\DocumentFacade as Document;
use ToneGabes\MpacEssentials\Facades\MoneyFacade as Money;
use ToneGabes\MpacEssentials\Support\Arr;

Document::formatCpf('52998224725'); // 529.982.247-25
Document::isValidCpf('529.982.247-25'); // true

Money::format(1234.56); // R$ 1.234,56
Money::toCents(10.50); // 1050

mpac_cpf('52998224725');
mpac_money(99.9);

(new Arr)->compact(['a' => 1, 'b' => null]);
```

Documentação completa em [`docs/`](docs/getting-started.md).

## Desenvolvimento

```bash
composer install
composer test
composer lint
```
