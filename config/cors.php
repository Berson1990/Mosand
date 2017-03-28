<?php

return [
/*
'permissions' => [
'dominio1.dev',
'dominio2.com.br',
'www.dominio1.com.br',
],
 */
    'allowedOrigins' => ['*'],
    'allowedHeaders' => ['*'], // ex : ['Content-Type', 'Accept']
    'allowedMethods' => ['*'], // ex: ['GET', 'POST', 'PUT',  'DELETE']
    'exposedHeaders' => ['Set-Cookie'],
    'permissions' => '*', // Libera todos domínios
];
