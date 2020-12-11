<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'welcome to the ao-webshop';

        return view('pages.index')->with([
            'title'=>$title
        ]);
    }

    public function product(){
        $title = 'welcome to the ao-webshop';

        return view('pages.index')->with([
            'title'=>$title
        ]);
    }

    public function login(){
        $title = 'Login';

        return view('pages.login')->with([
            'title'=>$title
        ]);
    }
    
}
