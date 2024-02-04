<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganizationController;

Route::get('/', function (){
    return view('index');
});

Route::get('/dashboard', [OrganizationController::class,'index']);

Route::get('/edit', function () {
    return view('edit');
});