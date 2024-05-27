<?php

use Akis\DC\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/akis', [UserController::class, 'index']);
