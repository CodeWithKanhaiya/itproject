<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class itprojectController extends Controller
{
    public function index(){
        return view('project.index');
    }
    public function port(){
        return view('project.portfoli');
    }
    public function about(){
        return view('project.about');
    }
    public function contact(){
        return view('project.contact');
    }
    public function Team(){
        return view('project.Team');
    }
    public function service(){
        return view('project.services');
    }
    public function droup(){
        return view('project.droupdown');
    }
}
//

