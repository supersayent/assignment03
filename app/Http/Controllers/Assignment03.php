<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Assignment03 extends Controller{
    //Simple Page
    public function index(){return view('index');}
    public function contact(){return view('contact');}
    public function privacy(){return view('privacy');}
    public function terms_conditions(){return view('terms_conditions');}
    public function freq_ques(){return view('freq_ques');}
}
