<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::get('/', [AuthorController::class, 'index']);
Route::get('/author/{author}',[AuthorController::class, 'bind']);
Route::post('/thanks', [AuthorController::class, 'create']);
Route::get('/test', [AuthorController::class, 'test']);