# Changelog

Todas as mudanças notáveis deste projeto serão documentadas neste arquivo.

O formato é baseado em [Keep a Changelog](https://keepachangelog.com/pt-BR/1.1.0/),
e este projeto adota [Versionamento Semântico](https://semver.org/lang/pt-BR/).

## [Não publicado]

### Adicionado

- Trait `BetterEnum` com helpers para enums (`names`, `values`, `options`, `random`, `asArray`)
- Configuração do PHPStan (`phpstan.neon`) com Larastan, PestStan e regras PHPUnit
- Configuração do PHP CS Fixer (`.php-cs-fixer.php`)
- Dependências de desenvolvimento: `mrpunyapal/peststan` e `phpstan/phpstan-phpunit`

### Alterado

- Arquivo de configuração renomeado de `config/essentials.php` para `config/mpac-essentials.php`
- Preset do Laravel Pint de `laravel` para `psr12`, com regras de estilo ampliadas
- Script Composer `lint:fix` renomeado para `format`

## [0.1.0] - 2026-07-24

### Adicionado

- Package Laravel `tonegabes/mpac-essentials` com utilidades compartilhadas para projetos MPAC
- Classes de suporte: `Arr`, `DateTime`, `Document`, `Mask` e `Money`
- Facades: `DocumentFacade`, `MaskFacade` e `MoneyFacade`
- Helpers globais (`mpac_*`) para CPF/CNPJ, máscaras e formatação de moeda
- Service provider com auto-descoberta, bindings e publicação de config (`essentials-config`)
- Configuração padrão (locale `pt_BR`, moeda `BRL`, timezone `America/Rio_Branco`)
- Suite de testes com Pest (unitários e feature)
- Documentação inicial em `README.md` e `docs/getting-started.md`
- Tooling de desenvolvimento: Composer, Pint e PHPUnit

[Não publicado]: https://gitlab.com/tonegabes/mpac-essentials/-/compare/v0.1.0...HEAD
[0.1.0]: https://gitlab.com/tonegabes/mpac-essentials/-/releases/v0.1.0
