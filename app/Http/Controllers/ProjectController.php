<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProjectController extends Controller
{
    public function all_projects(){

        $projects = json_decode(file_get_contents(storage_path('data/projects.json')));
        return view('frontend.projects.all_projects',compact('projects'));
    }

    public function projects($id){

        $data = json_decode(file_get_contents(storage_path('data/projects.json')),true);
        $projects = collect($data)->where('id', $id)->first();
        return view('frontend.projects.details',compact('projects'));

    }
}
