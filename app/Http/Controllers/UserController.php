<?php

namespace App\Http\Controllers;

use App\Models\Post;
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

        User::findorfail($req->user()->id)->update([
            "token" => null
        ]);

        $req->user()->tokens()->delete();

        Auth::logout();

        $req->session()->invalidate();

        $req->session()->regenerateToken();

        return redirect("/");
    }

    public function profile(?string $id = null){
        if(!$id){
            return view("profile",[
                "user" => Auth::user()
            ]);
        }
        else{
            return view("profile",[
                "user" => User::findorfail($id)
            ]);
        } 
    }

    public function edit(){
        return view("edit",[
            "user" => Auth::user()
        ]);
    }

    public function loginApi(Request $req){
        $req->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        $user = User::where("email", "=" , $req->email)->first();

        if (!$user){
            throw ValidationException::withMessages([
                "email" => "Email or Password don't match our data"
            ]);
        }

        if(!Hash::check($req->password,$user->password)){
            throw ValidationException::withMessages([
                "email" => "Email or Password don't match our data"
            ]);
        }
        
        $token = $user->createToken("api-token")->plainTextToken;

        $user->update([
            "token" => $token
        ]);

        return response()->json([
            "token" => $token
        ]);

    }

    public function logoutApi(Request $req){
        
        User::findorfail($req->user()->id)->update([
            "token" => null
        ]);
        
        $req->user()->tokens()->delete();

        return response()->json([
            "message" => "logout successful"
        ]);

    }
}
