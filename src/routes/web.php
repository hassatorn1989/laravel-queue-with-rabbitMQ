<?php

use App\Http\Controllers\QueueTestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-queue', [QueueTestController::class, 'send']);
