<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

       $intro = json_decode(file_get_contents(storage_path('data/intro.json')));
       $about = json_decode(file_get_contents(storage_path('data/about.json')));
    //    dd($intro);json_decode(file_get_contents(storage_path('data/intro.json')));
        return view('frontend.home',compact('intro','about'));
    }


}
