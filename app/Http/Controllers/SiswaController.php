<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiswaController extends Controller
{
    public function siswa(){
    	
    $nama['nama'] = ['Mona','Budi','Mina','Joni','Made'];
    return view('siswa.siswa')->with($nama);
}

}
