<?php

return [
    'logger' => [
        'default_driver' => env('MANAGER_LOGGER_DEFAULT'),
        'drivers' => [
            'monolog' => [
                //
            ],
            'mock' => [
                //
            ],
        ],
    ],
];
