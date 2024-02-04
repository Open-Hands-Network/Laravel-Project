<?php

use App\Http\Controllers\OrganizationsController;
use App\Models\Organization;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganizationController;

Route::get('/', function (){
    return view('index');
});

Route::get('/dashboard', [OrganizationsController::class,'index']);

Route::get('/edit', function () {
    return view('edit');
});
Route::get("/profile",function(){
    return view("profile");
});

Route::get("/organization", [OrganizationsController::class, "getData"]);
