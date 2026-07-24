# Getting Started

## Estrutura do package

```text
mpac-essentials/
├── config/mpac-essentials.php # Config publicada com --tag=essentials-config
├── src/
│   ├── EssentialsServiceProvider.php
│   ├── Facades/               # Facades Laravel
│   ├── Helpers/helpers.php    # Funções globais (mpac_*)
│   └── Support/               # Classes de utilidade
└── tests/
```

## Como adicionar uma nova utilidade

1. Crie a classe em `src/Support/` (ex.: `Phone.php`).
2. Registre o binding em `EssentialsServiceProvider::register()`.
3. (Opcional) Crie uma Facade em `src/Facades/`.
4. (Opcional) Exponha um helper em `src/Helpers/helpers.php`.
5. Cubra com testes em `tests/Unit/`.

## Consumindo em um projeto Laravel

### Path repository (desenvolvimento local)

```json
{
  "repositories": [
    {
      "type": "path",
      "url": "../mpac-essentials",
      "options": { "symlink": true }
    }
  ],
  "require": {
    "tonegabes/mpac-essentials": "*"
  }
}
```

### Injeção de dependência

```php
use ToneGabes\MpacEssentials\Support\Document;

class UserController
{
    public function __construct(
        private readonly Document $document,
    ) {
    }

    public function show(string $cpf): array
    {
        return [
            'cpf' => $this->document->formatCpf($cpf),
            'valid' => $this->document->isValidCpf($cpf),
        ];
    }
}
```

## Classes disponíveis

| Classe | Responsabilidade |
|--------|------------------|
| `Mask` | Aplicar máscaras e extrair dígitos |
| `Document` | Formatar/validar CPF e CNPJ |
| `Money` | Formatar moeda e converter centavos |
| `DateTime` | Datas no timezone da org |
| `Arr` | Compactar arrays e normalizar chaves |

## Configuração

| Chave | Default | Descrição |
|-------|---------|-----------|
| `essentials.locale` | `pt_BR` | Locale dos formatadores |
| `essentials.currency` | `BRL` | Moeda padrão |
| `essentials.timezone` | `America/Rio_Branco` | Timezone padrão |
