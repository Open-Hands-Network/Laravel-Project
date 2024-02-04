<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;
use Illuminate\Support\Facades\DB;

class OrganizationController extends Controller
{
    public function index(){
        $organizations=Organization::all();
        return view('dashboard')->with('organizations',$organizations);
    }
}
