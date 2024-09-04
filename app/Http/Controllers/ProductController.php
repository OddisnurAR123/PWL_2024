<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage()
    {
        $products = ['Kopi', 'Teh', 'Jus'];
        return view('POS_JS2.product', ['products' => $products, 'category' => 'Food & Beverage']);
    }

    public function beautyHealth()
    {
        $products = ['Skincare', 'BodyCare', 'Sampo'];
        return view('POS_JS2.product', ['products' => $products, 'category' => 'Beauty & Health']);
    }

    public function homeCare()
    {
        $products = ['Detergen', 'Sapu', 'Alat Pel'];
        return view('POS_JS2.product', ['products' => $products, 'category' => 'Home Care']);
    }

    public function babyKid()
    {
        $products = ['Popok', 'Mainan', 'Cemilan bayi'];
        return view('POS_JS2.product', ['products' => $products, 'category' => 'Baby & Kid']);
    }

}