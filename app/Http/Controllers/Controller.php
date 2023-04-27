<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;

class Controller extends BaseController
{
    public function xinchao(){
        echo "Chào mừng các bạn đã đến với PNV!";
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class MyController extends Controller
{
    public function index()
    {
        $title =" My name is Trân!";
        $description =" Cái này nó dùng để mô tả";
        $copyright = "Học Laravel chuẩn nha!";
        return view('test')->with(['title', $title, 'description'=>$description, 'copyright'=>$copyright]);
    }
}


