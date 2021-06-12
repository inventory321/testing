<?php

use App\Http\Controllers\RegsController;
use Illuminate\Support\Facades\Route;

Route::get('/registerascust', [RegsController::class, 'createascust'])
                ->middleware('guest')
                ->name('registerascust');

Route::post('/registerascust', [RegsController::class, 'storeascust'])
                ->middleware('guest');

Route::get('/registerasrider', [RegsController::class, 'createasrider'])
                ->middleware('guest')
                ->name('registerasrider');

Route::post('/registerasrider', [RegsController::class, 'storeasrider'])
                ->middleware('guest');                

Route::get('/login', [RegsController::class, 'create1'])
                ->middleware('guest')
                ->name('login');

Route::post('/login', [RegsController::class, 'store1'])
                ->middleware('guest');

Route::get('/forgot-password', [RegsController::class, 'create2'])
                ->middleware('guest')
                ->name('password.request');

Route::post('/forgot-password', [RegsController::class, 'store2'])
                ->middleware('guest')
                ->name('password.email');

Route::get('/reset-password/{token}', [RegsController::class, 'create3'])
                ->middleware('guest')
                ->name('password.reset');

Route::post('/reset-password', [RegsController::class, 'store3'])
                ->middleware('guest')
                ->name('password.update');

Route::get('/verify-email', [RegsController::class, '__invoke'])
                ->middleware('auth')
                ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [RegsController::class, '__invoke1'])
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [RegsController::class, 'store4'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('verification.send');

Route::get('/confirm-password', [RegsController::class, 'show'])
                ->middleware('auth')
                ->name('password.confirm');

Route::post('/confirm-password', [RegsController::class, 'store5'])
                ->middleware('auth');

Route::post('/logout', [RegsController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');
