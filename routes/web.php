<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckIfLocked;
use App\Http\Controllers\LockScreenController;
use App\Http\Controllers\TransportRequestController;
use App\Http\Controllers\TransportScheduleController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::middleware(CheckIfLocked::class)->group(function () {
            Route::get('/dashboard', function () {
                return view('dashboard');
            })->name('dashboard');

            Route::get('/transport_requests/search', [TransportRequestController::class, 'search'])->name('transport_requests.search');
            Route::get('/transport_requests/filter', [TransportRequestController::class, 'filter'])->name('transport_requests.filter');
            Route::resource('transport_requests', TransportRequestController::class);

            Route::get('/transport_schedules/search', [TransportScheduleController::class, 'search'])->name('transport_schedules.search');
            Route::resource('transport_schedules', TransportScheduleController::class);
        });


    Route::get('/lock', [LockScreenController::class, 'show'])->name('lock');
    Route::post('/unlock', [LockScreenController::class, 'unlock'])->name('unlock');
});
