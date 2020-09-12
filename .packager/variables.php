<?php

return [
    'author_name' => [
        'title' => 'Author name',
        'description' => 'Who is the author?',
        'default' => config('packager.author_name')
    ],
    'author_email' => [
        'title' => 'Author E-mail',
        'description' => 'What is the author\'s e-mail?',
        'default' => config('packager.author_email')
    ],
    'author_homepage' => [
        'title' => 'Author Homepage',
        'description' => 'What is the author\'s website?',
        'default' => config('packager.author_homepage')
    ],
    'license' => [
        'title' => 'License',
        'description' => 'Under which license will it be released?',
        'default' => config('packager.license')
    ],
];
