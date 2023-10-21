<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function experience(){

        $experiences = json_decode(file_get_contents(storage_path('data/experience.json')));
        return view('frontend.experience.information',compact('experiences'));
    }
}
