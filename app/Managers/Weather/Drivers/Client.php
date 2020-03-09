<?php

namespace App\Managers\Weather\Drivers;

use GuzzleHttp;
use Psr\Http\Client\ClientInterface;
use App\Managers\Weather\Contracts\Driver;

class Client implements Driver {

    protected $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function getByCityName(string $name): array
    {
        $format = 'weather?q=%s&appid=%s';

        $url = sprintf($format, $name, $this->config['api_key']);

        $contents = $this->call('GET', $url);

        return [
            'temp' => $contents['main']['temp'],
            'pressure' => $contents['main']['pressure'],
            'humidity' => $contents['main']['humidity'],
            'temp_min' => $contents['main']['temp_min'],
            'temp_max' => $contents['main']['temp_max'],
        ];
    }

    protected function call(string $method, string $url): array
    {
        $response = $this->getClient()->request($method, $url);

        return json_decode($response->getBody()->getContents(), true);
    }

    protected function getClient(): ClientInterface
    {
        return new GuzzleHttp\Client([
            'base_uri' => $this->config['api_url'],
        ]);
    }
}
