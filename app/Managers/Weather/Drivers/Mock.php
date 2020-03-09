<?php

namespace App\Managers\Weather\Drivers;

use App\Managers\Weather\Contracts\Driver;

class Mock implements Driver {

    protected $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function getByCityName(string $name): array
    {
        return [
            'temp' => $this->config['temp'],
            'pressure' => $this->config['pressure'],
            'humidity' => $this->config['humidity'],
            'temp_min' => $this->config['temp_min'],
            'temp_max' => $this->config['temp_max'],
        ];
    }
}
