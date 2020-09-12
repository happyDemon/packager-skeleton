<?php

return [
    'author_name' => [
        'title' => 'Author name',
        'description' => null,
        'default' => config('packager.author_name')
    ],
    'author_email' => [
        'title' => 'Author E-mail',
        'description' => null,
        'default' => config('packager.author_email')
    ],
    'author_homepage' => [
        'title' => 'Author Homepage',
        'description' => null,
        'default' => config('packager.author_homepage')
    ],
    'license' => [
        'title' => 'License',
        'description' => null,
        'default' => config('packager.license')
    ],
];
