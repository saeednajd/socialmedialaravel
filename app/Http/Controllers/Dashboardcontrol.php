<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;
class Dashboardcontrol extends Controller
{
    public function index(){
        $thisuserpost=posts::where('usersid',auth()->user()->id, )->get();
        return view('dashboard',['thisuserpost'=>$thisuserpost]);
    }
}
