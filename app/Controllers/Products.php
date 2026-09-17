<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Products extends BaseController
{
    protected ProductModel $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    // READ - daftar semua produk
    public function index()
    {
        $data['products'] = $this->productModel->orderBy('product_id', 'ASC')->findAll();

        return view('products/index', $data);
    }

    // CREATE - tampilkan form tambah produk
    public function create()
    {
        return view('products/create');
    }

    // # GitHub = https://github.com/puteriazli

    // CREATE - simpan produk baru
    public function store()
    {
        if (! $this->productModel->save([
            'product_name' => $this->request->getPost('product_name'),
            'qty_in_stock' => $this->request->getPost('qty_in_stock'),
            'price'        => $this->request->getPost('price'),
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->productModel->errors());
        }

        return redirect()->to('/products')->with('success', 'Produk berhasil ditambahkan.');
    }

    // GitHub = https://github.com/puteriazli

    // UPDATE - tampilkan form edit produk
    public function edit($id)
    {
        $product = $this->productModel->find($id);

        if (! $product) {
            return redirect()->to('/products')->with('error', 'Produk tidak ditemukan.');
        }

        return view('products/edit', ['product' => $product]);
    }

    // UPDATE - simpan perubahan produk
    public function update($id)
    {
        $product = $this->productModel->find($id);

        if (! $product) {
            return redirect()->to('/products')->with('error', 'Produk tidak ditemukan.');
        }

        if (! $this->productModel->update($id, [
            'product_name' => $this->request->getPost('product_name'),
            'qty_in_stock' => $this->request->getPost('qty_in_stock'),
            'price'        => $this->request->getPost('price'),
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->productModel->errors());
        }

        return redirect()->to('/products')->with('success', 'Produk berhasil diperbarui.');
    }

    // LinkedIn = https://www.linkedin.com/in/puteriazli

    // DELETE - hapus produk
    public function delete($id)
    {
        $product = $this->productModel->find($id);

        if (! $product) {
            return redirect()->to('/products')->with('error', 'Produk tidak ditemukan.');
        }

        $this->productModel->delete($id);

        return redirect()->to('/products')->with('success', 'Produk berhasil dihapus.');
    }
}
