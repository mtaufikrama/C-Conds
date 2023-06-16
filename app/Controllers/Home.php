<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Home extends BaseController
{
    public function index()
    {
        session()->start();
        $login = session()->get('login');
        if ($login != null) {
            $barangModel = new BarangModel();
            $barang = $barangModel->findAll();
            if ($login == '1'){
                return view('admin', compact('barang'));
            } else {
                return view('home', compact('barang'));
            }
        } else {
            return redirect()->to('/login');
        }
    }
    public function admin()
    {
        session()->start();
        $login =session()->get('login');
        if ($login != null) {
            $barangModel = new BarangModel();
            $barang = $barangModel->findAll();
            return view('admin', compact('barang'));
        } else {
            return redirect()->to('/login');
        }
    }
}
?>