<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index(){
        return view("project",[
            'title'=>'Modern Business - Start Bootstrap Template'
        ]);
    }
}
