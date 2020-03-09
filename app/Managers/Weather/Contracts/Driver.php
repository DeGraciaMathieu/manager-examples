<?php

namespace App\Managers\Weather\contracts;

interface Driver {
    public function getByCityName(string $name): array;
}
