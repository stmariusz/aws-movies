<?php

const DATABASE_OPTIONS = [
    'driver'    => 'pdo_mysql',
    'host'      => 'localhost',
    'dbname'    => 'movies',
    'user'      => 'movie_u',
    'password'  => '12345',
];

const ORM_MAPPINGS = [
    [
        'type' => 'simple_yml',
        'namespace' => 'Movies\Domain',
        'prefix' => 'Movies\Domain',
        'path' => __DIR__.'/../src/Movies/Infrastructure/Repository/Doctrine/mappings/',
        'use_simple_annotation_reader' => false,
    ]
];