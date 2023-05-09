<?php

use App\Models\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Collection;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
//    return 'test';
//    Log::chunk(10, function (Collection $flights) {
//        foreach ($flights as $flight) {
//            echo $flight->name . '<br/>';
//        }
//    });

//    foreach (Log::lazy() as $log) {
//        echo $log->name . '<br />';
//    }
    foreach (Log::where('id', '!=', 10000)->cursor() as $log) {
        echo $log->name . '<br />';
    }


//    dd('laravel_advanced_queries');
//    return view('welcome');
});
