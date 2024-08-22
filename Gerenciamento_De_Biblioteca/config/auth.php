<?php


return [


   'defaults' => [
    'guard' => 'web',
    'passwords' => 'users',
],

'guards' => [
    'web' => [
        'driver' => 'session',
        'provider' => 'usuarios', // Ajuste aqui se necessário
    ],
    'api' => [
        'driver' => 'token',
        'provider' => 'usuarios', // Ajuste aqui se necessário
        'hash' => false,
    ],
],

'providers' => [
    'usuarios' => [
        'driver' => 'eloquent',
        'model' => App\Models\Usuario::class,
    ],
],


];
