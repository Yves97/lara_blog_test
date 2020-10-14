<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        (string)$title = "Hello from the title";
        return view('pages.index',compact('title'));
    }

    public function about(){
        return \view('pages.about');
    }
    public function services(){
        $data = [
            'title' => 'this is the title',
            'name' => 'Yves'
        ];
        return \view('pages.services',compact('data'));
    }
}
