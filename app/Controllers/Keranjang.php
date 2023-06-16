<?php

namespace App\Controllers;

use App\Models\KeranjangModel;

class Keranjang extends BaseController
{
    public function index()
    {
        session()->start();
        $login = session()->get('login');
        if ($login != null) {
            $keranjangModel = new KeranjangModel();
            $keranjang = $keranjangModel->findAll();
            return view('home', compact('keranjang'));
        } else {
            return redirect()->to('/login');
        }
    }
}
?>