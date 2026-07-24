<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Locale padrão
    |--------------------------------------------------------------------------
    |
    | Locale usado por formatadores (moeda, datas, etc.) quando nenhum
    | valor for informado explicitamente.
    |
    */

    'locale' => env('ESSENTIALS_LOCALE', 'pt_BR'),

    /*
    |--------------------------------------------------------------------------
    | Moeda padrão
    |--------------------------------------------------------------------------
    */

    'currency' => env('ESSENTIALS_CURRENCY', 'BRL'),

    /*
    |--------------------------------------------------------------------------
    | Timezone padrão
    |--------------------------------------------------------------------------
    */

    'timezone' => env('ESSENTIALS_TIMEZONE', 'America/Rio_Branco'),

];
