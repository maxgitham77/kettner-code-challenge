<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\ApplicationController;

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


    Route::get('/', [ApplicationController::class, 'create'])->name('apply.create');
    Route::post('/apply', [ApplicationController::class, 'store'])->name('apply.store');
    Route::post('/apply', [ApplicationController::class, 'store'])->name('apply.store');
    Route::get('/thank-you', [ApplicationController::class, 'thankYou'])->name('apply.thankyou');


