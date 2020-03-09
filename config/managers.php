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
    'weather' => [
        'default_driver' => env('MANAGER_WEATHER_DEFAULT'),
        'drivers' => [
            'client' => [
                'api_url' => 'https://api.openweathermap.org/data/2.5/',
                'api_key' => env('MANAGER_WEATHER_CLIENT_API_KEY'),
            ],
            'mock' => [
                'temp' => 280.32,
                'pressure' => 1012,
                'humidity' => 81,
                'temp_min' => 279.15,
                'temp_max' => 281.15,
            ],
        ],
    ],
];
