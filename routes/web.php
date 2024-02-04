<?php

use App\Http\Controllers\OrganizationsController;
use App\Models\Organization;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganizationController;

Route::get('/', function (){
    return view('index');
});
Route::get('/edit', function () {
    return view('edit');
});
Route::get("/profile",function(){
    return view("profile");
});
Route::get("/editProfile", function(){
    return view("edit");
});
Route::get("/signin", function(){
    return view("signin");
});
Route::get("/signup", function(){
    return view("signup");
});
Route::get("/addOrganizationRequest", function(){
    return view("add_organization");
});
Route::get("/organization", [OrganizationsController::class, "getData"]);
Route::get('/dashboard', [OrganizationsController::class,'index']);

