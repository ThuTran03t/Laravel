<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinhTongController extends Controller
{
    public function index(){
        return view('tong');
    }
    public function Summ(Request $request){
        $result = $request -> numberA + $request -> numberB;
        return view('tong', compact('result'));
    }
}


