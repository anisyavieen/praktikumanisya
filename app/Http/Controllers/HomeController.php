<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       // $data = [
          //  'nama' => 'Anisya',
          // 'pekerjaan' => 'Developer',
          // ];
          // return view('home')->with($data);
          $nama = "Anisya";
          $pekerjaan = "Developer";
          return view('home', compact('nama', 'pekerjaan'));
    }
    public function contact()
    {
    return view('contact');
    }
}
