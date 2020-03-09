<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Managers\Weather\WeatherManager;

Route::get('/', function () {

    // is identical to app(WeatherManager::class)->getByCityName('London');
    // see environment configuration
    $iThinkItsRaining = app(WeatherManager::class)->driver('mock')->getByCityName('London');

    // $iThinkItsRaining = app(WeatherManager::class)->driver('client')->getByCityName('London');

    dd($iThinkItsRaining);  
});
