<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() { 
        return 'Hello World'; 
    } 
    // Menambahkan fungsi baru
    // public function greeting(){ 
    //     return view('blog.hello', ['name' => 'Oddis Nur Alifathur Razaaq']); 
    //     }
    // Mengubah fungsi greeting
    public function greeting(){ 
        return view('blog.hello') 
            ->with('name','Oddis Nur Alifathur Razaaq') 
            ->with('occupation','Astronaut'); 
    } 
}
