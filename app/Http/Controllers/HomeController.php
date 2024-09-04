<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class HomeController extends Controller
// {
//     public function __invoke()
//     {
//         return 'Selamat Datang';
//     }
// }

// Menggunakan class ini untuk Soal praktikum
class HomeController extends Controller
{
    public function index()
    {
        return view('blog.hello', ['name' => 'Di Ods_Shop']);
    }
}