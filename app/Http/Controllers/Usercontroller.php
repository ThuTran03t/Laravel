<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index()
    {
        $name =" My name is Trân!";
        $yearsold =" 19";
        $class = "PNV24A";
        $arr= ['title', $name, 'description'=>$yearsold, 'copyright'=>$class];
        return view('hompage')->with('student', $arr);
    }
}

