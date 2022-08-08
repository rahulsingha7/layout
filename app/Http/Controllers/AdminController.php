<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.pages.dashboard');
    }
    public function buttons(){
        return view('admin.pages.buttons');
    }
    public function cards(){
        return view('admin.pages.cards');
    }
    public function colors(){
        return view('admin.pages.colors');
    }
    public function borders(){
        return view('admin.pages.borders');
    }
    public function animations(){
        return view('admin.pages.animations');
    }
    public function other(){
        return view('admin.pages.other');
    }
    public function login(){
        return view('admin.pages.login');
    }
    public function register(){
        return view('admin.pages.register');
    }
    public function forgotpassword(){
        return view('admin.pages.forgotpassword');
    }
    public function notfoundpages(){
        return view('admin.pages.notfoundpages');
    }
    public function blankpage(){
        return view('admin.pages.blankpage');
    }
    public function chart(){
        return view('admin.pages.chart');
    }
    public function table(){
        return view('admin.pages.table');
    }
}
