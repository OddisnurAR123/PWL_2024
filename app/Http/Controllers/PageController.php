<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index() { 
        return 'Selamat Datang'; 
    } 

    public function about() { 
        return 'Nama: Oddis Nur Alifathur Razaaq <br> Nim: 2241760015'; 
    }

    public function articles($id)
    {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}