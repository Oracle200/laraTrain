<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CityController;



//!Примеры
Route::get('/', function () {
    return 'главная страница сайта';
});

Route::prefix('admin')->group(function() {
    Route::get('/lol', function () {
        return 'all';
    });
    Route::get('/lol/{id}', function ($id) {
        return $id;
    });
});
///////


//!Теория
Route::get('/post', [PostController::class, 'show']);



//!Практика
Route::prefix('user')->group(function() {
    Route::get('/', [UserController::class, 'show']);
    Route::get('/all', [UserController::class, 'all']);
    Route::get('/{surname?}/{name?}', [UserController::class, 'show']);
});

Route::prefix('city')->group(function() {
    Route::get('/', [CityController::class, 'show']);
    Route::get('/{city?}', [CityController::class, 'show']);
});