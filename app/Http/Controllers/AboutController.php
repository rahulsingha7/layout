<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $name= 'Rahul';
        $email = 'Singha';
        return view('about',['myname'=>$name,'myemail'=>$email]);
    }
}
