<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;
use Psy\Readline\Hoa\Console;

class OrganizationsController extends Controller
{
    public function getData(Request $request){
        if($request->has("volunteer_donation")){
            $volunteer_donation = $request->input("volunteer_donation");
            $organizations = Organization::where("volunteer_donation", $volunteer_donation)->get();
            if($request->input("type")!=="default"){
                $type = $request->input("type");
                $organizations = Organization::where("type", $type)->get();
            }
            return view("organization")->with("organizations", $organizations);
        }
        $organizations = Organization::all();
        return view("organization")->with("organizations", $organizations);
    }

    public function index(){
        $organizations=Organization::all();
        return view('dashboard')->with('organizations',$organizations);
    }
}
