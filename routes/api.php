<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index')->name('users.index');
    Route::get('/users/create', 'create')->name('users.create');
    Route::post('/users', 'store')->name('users.store');
    Route::get('/users/{user}', 'show')->name('users.show');
    Route::get('/users/{user}/edit', 'edit')->name('users.edit');
    Route::put('/users/{user}', 'update')->name('users.update');
    Route::delete('/users/{user}', 'destroy')->name('users.destroy');
});

Route::controller(TransactionController::class)->group(function () {
    Route::get('/transactions', 'index')->name('transactions.index');
    Route::get('/transactions/create', 'create')->name('transactions.create');
    Route::post('/transactions', 'store')->name('transactions.store');
    Route::get('/transactions/{transaction}', 'show')->name('transactions.show');
    Route::get('/transactions/{transaction}/edit', 'edit')->name('transactions.edit');
    Route::put('/transactions/{transaction}', 'update')->name('transactions.update');
    Route::delete('/transactions/{transaction}', 'destroy')->name('transactions.destroy');
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);
    Route::apiResource('users', UserController::class);
});
