<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function halamanProfile($id, $name)
    {
        return view('POS_JS2.profile', ['id' => $id, 'name' => $name]);
    }
}