<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    protected UserModel $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    // READ - daftar semua user
    public function index()
    {
        $data['users'] = $this->userModel->orderBy('user_id', 'ASC')->findAll();

        return view('users/index', $data);
    }

    // CREATE - tampilkan form tambah user
    public function create()
    {
        return view('users/create');
    }

    // LinkedIn = https://www.linkedin.com/in/puteriazli

    // CREATE - simpan user baru
    public function store()
    {
        if (! $this->userModel->save([
            'name'  => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->userModel->errors());
        }

        return redirect()->to('/users')->with('success', 'User berhasil ditambahkan.');
    }

    // UPDATE - tampilkan form edit user
    public function edit($id)
    {
        $user = $this->userModel->find($id);

        if (! $user) {
            return redirect()->to('/users')->with('error', 'User tidak ditemukan.');
        }

        return view('users/edit', ['user' => $user]);
    }

    // UPDATE - simpan perubahan user
    public function update($id)
    {
        $user = $this->userModel->find($id);

        if (! $user) {
            return redirect()->to('/users')->with('error', 'User tidak ditemukan.');
        }

        if (! $this->userModel->update($id, [
            'name'  => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->userModel->errors());
        }

        return redirect()->to('/users')->with('success', 'User berhasil diperbarui.');
    }

    // GitHub = https://github.com/puteriazli

    // DELETE - hapus user
    public function delete($id)
    {
        $user = $this->userModel->find($id);

        if (! $user) {
            return redirect()->to('/users')->with('error', 'User tidak ditemukan.');
        }

        $this->userModel->delete($id);

        return redirect()->to('/users')->with('success', 'User berhasil dihapus.');
    }
}
