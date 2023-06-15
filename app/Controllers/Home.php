<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Home extends BaseController
{
    public function index()
    {
        $barangModel = new BarangModel();
        $barang = $barangModel->findAll();
        return view('home', compact('barang'));
    }
}
