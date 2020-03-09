# manager-examples
Project samples for https://github.com/DeGraciaMathieu/Manager

See `web.php` for details

```php
use App\Managers\Weather\WeatherManager;

Route::get('/', function () {

    // is identical to app(WeatherManager::class)->getByCityName('London');
    // see environment configuration
    $iThinkItsRaining = app(WeatherManager::class)->driver('mock')->getByCityName('London');

    // $iThinkItsRaining = app(WeatherManager::class)->driver('client')->getByCityName('London');

    dd($iThinkItsRaining);
    
    // array:5 [▼
    //   "temp" => 280.32
    //   "pressure" => 1012
    //   "humidity" => 81
    //   "temp_min" => 279.15
    //   "temp_max" => 281.15
    // ]    
});
```
