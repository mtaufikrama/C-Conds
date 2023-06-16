<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\UserModel;

class User extends BaseController
{
    public function loginindex()
    {
        return view('login');
    }
    
    public function registerindex()
    {
        return view('register');
    }

    public function login()
    {
        session()->start();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();
        $admin = '1';
        $barangModel = new BarangModel();
        $barang = $barangModel->findAll();
        if ($user && $password == $user['password']) {
            session()->set('login',$user['id']);
            if ($user['id'] == $admin) {
                return view('admin', compact('barang'));
            } else {
                return view('home', compact('barang'));
            }   
        } else {
            return redirect()->to('/register');
        }
    }
    
    public function logout()
    {
        session()->start();
        session()->remove('login');
        session()->destroy();
        return redirect()->to('/');
    }

    public function register()
    {
        $userModel = new UserModel();
        $file = $this->request->getFile('foto');
        $newName = $file->getRandomName();
        $file->move('images', $newName);
        $barangModel = new BarangModel();
        $barang = $barangModel->findAll();
        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirm_password');
        if ($password == $confirmPassword){
            $data = [
                'email' => $this->request->getPost('email'),
                'password' => $password,
                'nama' => $this->request->getPost('nama'),
                'alamat' => $this->request->getPost('alamat'),
                'harga' => $this->request->getPost('harga'),
                'no_hp' => $this->request->getPost('no_hp'),
                'foto' => 'images/' . $newName
            ];
            $userModel->insert($data);
            session()->setFlashData('success', 'Data mahasiswa berhasil ditambahkan!');
            return view('home', compact('barang'));
        } else {
            session()->setFlashData('', 'Data mahasiswa berhasil ditambahkan!');
            return view('register');
        }
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
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'harga' => $this->request->getPost('harga'),
            'no_hp' => $this->request->getPost('no_hp'),
            'foto' => 'images/' . $newName
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
?>