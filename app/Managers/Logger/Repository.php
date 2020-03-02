<?php

namespace App\Managers\Logger;

use App\Managers\Logger\Contracts\Driver;

class Repository {

    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }

    public function doAnything()
    {
        return $this->driver->doAnything();
    }
}
