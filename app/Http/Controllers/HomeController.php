<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    public function index(){
    	echo "dari function index";
    }
    public function sekolah($sekolah=""){
    	echo "dari controller".$sekolah;

    }
    public function detail($sekolah=""){
    	$data['sekolah']=$sekolah;
    	return view('sekolah')->with($data);
    }
    public function input(){
        return view('input');
    }
    public function save(){
        $a = new \App\User;
        $a->name = "adrian";
        $a->email="adrianmilano@gmail.com";
        $a->password = bcrypt('abc');
        $a->save();
    }
}
