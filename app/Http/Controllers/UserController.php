<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $news = DB::table('news')->latest('id')->limit(3)->get();
        return view('user.home', ['news' => $news]);
    }

    public function news(){
        $news = DB::table('news')->latest('id')->limit(3)->get();
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
