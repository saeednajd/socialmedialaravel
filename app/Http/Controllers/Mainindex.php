<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;
class Mainindex extends Controller
{
    public function index(){
        $allposts=posts::all();
        return view('welcome',['allposts'=>$allposts]);

        
    }
}
