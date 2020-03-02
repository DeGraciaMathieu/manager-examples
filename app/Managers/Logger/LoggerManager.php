<?php

namespace App\Managers\Logger;

use Config;
use DeGraciaMathieu\Manager\Manager;
use App\Managers\Logger\Contracts\Driver;

class LoggerManager extends Manager {

    public function createMonologDriver(): Repository
    {
        $config = Config::get('managers.logger.drivers.monolog');

        $driver = new Drivers\Monolog($config);

        return $this->getRepository($driver);
    }

    public function createMockDriver(): Repository
    {
        $config = Config::get('managers.logger.drivers.mock');

        $driver = new Drivers\Mock($config);

        return $this->getRepository($driver);
    }

    protected function getRepository(Driver $driver)
    {
        return new Repository($driver);
    }

    public function getDefaultDriver()
    {
        return Config::get('managers.logger.default_driver');
    }
}
