<?php

use App\Http\Controllers\Frontend\PanelController;
use Illuminate\Support\Facades\Route;


Route::get('/', PanelController::class)->name('home');
Route::fallback(function (){
    return view('admin.layouts.partials.errors');
});
