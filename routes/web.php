<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OrganizationsController;
use App\Models\Organization;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\UserController;

Route::get('/', function (){
    return view('index');
});
Route::get("/addOrganizationRequest", function(){
    return view("add_organization");
});
Route::get("/aboutUs", function(){
    return view("about_and_contact_us.about_us");
});
Route::get("/contactUs", function(){
    return view("about_and_contact_us.contact_us");
});
Route::get("/organization", [OrganizationsController::class, "getData"]);
Route::get('/dashboard', [OrganizationsController::class,'index']);
Route::get('/chat', [ChatController::class, 'index']);

Route::controller(UserController::class)->group(function(){
    Route::get("/sign-up","signUp")->name("user.signUp")->middleware("isLoggedIn");
    Route::post("/sign-up","addUser")->name("user.add")->middleware("isLoggedIn");
    Route::get("/sign-in","signIn")->name("user.signIn")->middleware("isLoggedIn");
    Route::post("/sign-in","login")->name("user.login")->middleware("isLoggedIn");
    Route::post("/logout","logout")->name("user.logout");
    Route::get("/profile","profile")->name("user.profile")->middleware("auth");
    Route::get("/profile/edit","edit")->name("user.edit")->middleware("auth");
});

//Send Mail Route
Route::post ('/send-mail',[MailController::class,'maildata'])->name('send_mail');