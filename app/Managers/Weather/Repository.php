<?php

namespace App\Managers\Weather;

use App\Managers\Weather\Contracts\Driver;

class Repository {

    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }

    public function getByCityName(string $name): array
    {
        return $this->driver->getByCityName($name);
    }
}
