<?php

declare(strict_types=1);

/**
 * Returns the importmap for this application.
 *
 * - "path" is a path inside the asset mapper system. Use the
 *     "debug:asset-map" command to see the full list of paths.
 *
 * - "entrypoint" (JavaScript only) set to true for any module that will
 *     be used as an "entrypoint" (and passed to the importmap() Twig function).
 *
 * The "importmap:require" command can be used to add new entries to this file.
 */
return [
    'overview' => [
        'path' => './assets/overview.js',
        'entrypoint' => true,
    ],
    '@symfony/stimulus-bundle' => [
        'path' => './vendor/symfony/stimulus-bundle/assets/dist/loader.js',
    ],
    'typed.js' => [
        'version' => '2.1.0',
    ],
    '@hotwired/stimulus' => [
        'version' => '3.2.2',
    ],
    'wow.js' => [
        'version' => '1.2.2',
    ],
    'parallax-js' => [
        'version' => '3.1.0',
    ],
    'animate.css' => [
        'version' => '4.1.1',
    ],
    'animate.css/animate.min.css' => [
        'version' => '4.1.1',
        'type' => 'css',
    ],
    'bootstrap' => [
        'version' => '5.3.2',
    ],
    '@popperjs/core' => [
        'version' => '2.11.8',
    ],
    'bootstrap/dist/css/bootstrap.min.css' => [
        'version' => '5.3.2',
        'type' => 'css',
    ],
];
