<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function business($x){
        return view('business',['cat'=>$x]);
    }
}
