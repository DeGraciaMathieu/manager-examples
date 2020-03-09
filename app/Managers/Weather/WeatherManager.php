<?php

namespace App\Managers\Weather;

use Config;
use DeGraciaMathieu\Manager\Manager;
use App\Managers\Weather\Contracts\Driver;

class WeatherManager extends Manager {

    public function createClientDriver(): Repository
    {
        $config = Config::get('managers.weather.drivers.client');

        $driver = new Drivers\Client($config);

        return $this->getRepository($driver);
    }

    public function createMockDriver(): Repository
    {
        $config = Config::get('managers.weather.drivers.mock');

        $driver = new Drivers\Mock($config);

        return $this->getRepository($driver);
    }

    protected function getRepository(Driver $driver): Repository
    {
        return new Repository($driver);
    }

    public function getDefaultDriver(): string
    {
        return Config::get('managers.weather.default_driver');
    }
}
