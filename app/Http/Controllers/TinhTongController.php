<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinhTongController extends Controller
{
    return view('sum');
}

class SumController extends Controller
{
    public function index()
    {
        return view('sum');
    }
}
