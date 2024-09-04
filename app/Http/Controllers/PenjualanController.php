<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        // Misalnya saya mengirim data transaksi ke view di sini.
        $transaksi = [
            ['item' => 'Kopi', 'qty' => 2, 'price' => 50000],
            ['item' => 'Teh', 'qty' => 1, 'price' => 20000],
        ];

        return view('POS_JS2.penjualan', ['transaksi' => $transaksi]);
    }
}