<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user.home');
    }

    public function news(){
        return view('user.news');
    }



    public function uz_lang(){
        session()->put('locale','uz');
        return redirect()->back();
    }

    public function ru_lang(){
        session()->put('locale','ru');
        return redirect()->back();
    }

    public function en_lang(){
        session()->put('locale','en');
        return redirect()->back();
    }
}
