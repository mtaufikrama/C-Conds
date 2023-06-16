<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController
{
    public function create()
    {
        $data = [
            'validation' => \config\Services::validation()
        ];
        return view('tambah', $data);
    }
    public function store()
    {        
        $barangModel = new BarangModel();
        $file = $this->request->getFile('gambar');
        $newName = $file->getRandomName();
        $file->move('images', $newName);
        $data = [
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'kategori' => $this->request->getPost('kategori'),
            'stok' => $this->request->getPost('stok'),
            'gambar' => 'images/' . $newName
        ];
        $barangModel->insert($data);
        session()->setFlashData('success', 'Data mahasiswa berhasil ditambahkan!');
        return redirect()->to('/admin');
    }
    public function edit($id)
    {
        $barangModel = new BarangModel();
        $barang = $barangModel->find($id);
        return view('edit', compact('barang'));
    }
    public function detail($id)
    {
        $barangModel = new BarangModel();
        $barang = $barangModel->find($id);
        return view('detail', compact('barang'));
    }
    public function update($id)
    {
        $barangModel = new BarangModel();
        $file = $this->request->getFile('gambar');
        $newName = $file->getRandomName();
        $file->move('images', $newName);
        $data = [
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'kategori' => $this->request->getPost('kategori'),
            'stok' => $this->request->getPost('stok'),
            'gambar' => 'images/' . $newName
        ];
        $barangModel->update($id, $data);
        return redirect()->to('/admin');
    }
    public function delete($id)
    {
        $barangModel = new BarangModel();
        $barangModel->delete($id);
        return redirect()->to('/admin');
    }
}
?>