<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2024-08-12 14:57:54
 * @link https://github.com/xxxl4
 * 
 */
use Illuminate\Support\Facades\Route;
use NexaMerchant\GoogleTagManager\Http\Controllers\Api\ExampleController;

Route::group(['middleware' => ['api'], 'prefix' => 'api'], function () {
     Route::prefix('googletagmanager')->group(function () {

        Route::controller(ExampleController::class)->prefix('example')->group(function () {

            Route::get('demo', 'demo')->name('googletagmanager.api.example.demo');

        });

     });
});