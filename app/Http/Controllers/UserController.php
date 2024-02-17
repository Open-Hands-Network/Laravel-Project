<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    // return the signup form
    public function signUp(){
        return view("signup",[
            "user" => Auth::user()
        ]);
    }

    public function addUser(Request $req){
        $data = $req->validate([
            "first_name" => "required",
            "last_name" => "required",
            "gender" => "required|regex:/^[12]?$/",
            "email" => "required|unique:users,email",
            "password" => "required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{8,16}$/",
            "bio" => "required",
            "job" => "required",
            "nationalID" => "required|regex:/^\d{14}$/|unique:users,nationalID",
            "phone" => "required|regex:/^01[0125]\d{8}$/|unique:users,phone",
            "terms" => "required|regex:/^1$/",
        ]);
        $data["password"] = password_hash($req->password,PASSWORD_BCRYPT);
        unset($data["terms"]);
        User::insert($data);
        return redirect()->route("user.signIn");
    }

    public function signIn(){
        return view("signin");
    }

    public function login(Request $req){
        $data = $req->validate([
            "email" => "email|required",
            "password" => "required"
        ]);

        if(Auth::attempt($data,$req->remember)){
            $req->session()->regenerate();
            return redirect("/");
        }

        throw ValidationException::withMessages([
            "email" => "Email or Password don't match our data"
        ]);

    }

    public function logout(Request $req){
        Auth::logout();

        $req->session()->invalidate();

        $req->session()->regenerateToken();

        return redirect("/");
    }

    public function profile(){
        return view("profile",[
            "user" => Auth::user()
        ]);
    }

    public function edit(){
        return view("edit",[
            "user" => Auth::user()
        ]);
    }
}
