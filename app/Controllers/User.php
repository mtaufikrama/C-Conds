<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
    
        $userModel = new UserModel();
    
        // Mencari pengguna berdasarkan email
        $user = $userModel->where('email', $email)->first();
        // Jika pengguna ditemukan dan password sesuai
        $admin = '1';
        if ($user && $password == $user['password']) {
            if ($user['id'] == $admin){
                return redirect()->to('/register');
            } else{
                return redirect()->to('/');
            }
        } else {
            // Redirect kembali ke halaman login
            return view('login');
        }
    }
    public function register()
    {
        $userModel = new UserModel();
        $user = $userModel->findAll();
        return view('register', compact('user'));
    }

    public function create()
    {
        session();
        $data = [
            'validation' => \config\Services::validation()
        ];
        return view('tambah', $data);
    }
    public function store()
    {
        $userModel = new UserModel();
        $file = $this->request->getFile('foto');
        $newName = $file->getRandomName();
        $file->move('images', $newName);
        $data = [
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'kategori' => $this->request->getPost('kategori'),
            'stok' => $this->request->getPost('stok'),
            'foto' => 'images/' . $newName
        ];
        $userModel->insert($data);
        session()->setFlashData('success', 'Data mahasiswa berhasil ditambahkan!');
        return view('home');
    }
    public function edit($id)
    {
        $userModel = new UserModel();
        $user = $userModel->find($id);
        return view('edit', compact('user'));
    }
    public function detail($id)
    {
        $userModel = new UserModel();
        $user = $userModel->find($id);
        return view('detail', compact('user'));
    }
    public function update($id)
    {
        $userModel = new UserModel();
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
        $userModel->update($id, $data);
        return view('home');
    }
    public function delete($id)
    {
        $userModel = new UserModel();
        $userModel->delete($id);
        return view('home');
    }
}
