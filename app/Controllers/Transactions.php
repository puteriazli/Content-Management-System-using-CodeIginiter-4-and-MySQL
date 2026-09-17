<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\TransactionModel;
use App\Models\UserModel;

class Transactions extends BaseController
{
    protected TransactionModel $transactionModel;
    protected UserModel $userModel;
    protected ProductModel $productModel;

    public function __construct()
    {
        $this->transactionModel = new TransactionModel();
        $this->userModel        = new UserModel();
        $this->productModel     = new ProductModel();
    }

    // READ - daftar semua transaksi (join dengan user & product)
    public function index()
    {
        $data['transactions'] = $this->transactionModel->getAllWithDetails();

        return view('transactions/index', $data);
    }

    // CREATE - tampilkan form tambah transaksi
    public function create()
    {
        $data['users']    = $this->userModel->orderBy('name', 'ASC')->findAll();
        $data['products'] = $this->productModel->orderBy('product_name', 'ASC')->findAll();

        return view('transactions/create', $data);
    }

    // GitHub = https://github.com/puteriazli

    // CREATE - simpan transaksi baru
    public function store()
    {
        $rules = $this->transactionModel->getValidationRules();

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $product = $this->productModel->find($this->request->getPost('product_id'));

        if (! $product) {
            return redirect()->back()->withInput()->with('error', 'Produk yang dipilih tidak ditemukan.');
        }

        $qty        = (int) $this->request->getPost('qty');
        $totalPrice = $qty * $product['price'];

        $this->transactionModel->insert([
            'user_id'          => $this->request->getPost('user_id'),
            'product_id'       => $this->request->getPost('product_id'),
            'payment_method'   => $this->request->getPost('payment_method'),
            'qty'              => $qty,
            'total_price'      => $totalPrice,
            'transaction_date' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/transactions')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    // UPDATE - tampilkan form edit transaksi
    public function edit($id)
    {
        $transaction = $this->transactionModel->find($id);

        if (! $transaction) {
            return redirect()->to('/transactions')->with('error', 'Transaksi tidak ditemukan.');
        }

        $data['transaction'] = $transaction;
        $data['users']       = $this->userModel->orderBy('name', 'ASC')->findAll();
        $data['products']    = $this->productModel->orderBy('product_name', 'ASC')->findAll();

        return view('transactions/edit', $data);
    }

    // LinkedIn = https://www.linkedin.com/in/puteriazli

    // UPDATE - simpan perubahan transaksi
    public function update($id)
    {
        $transaction = $this->transactionModel->find($id);

        if (! $transaction) {
            return redirect()->to('/transactions')->with('error', 'Transaksi tidak ditemukan.');
        }

        $rules = $this->transactionModel->getValidationRules();

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $product = $this->productModel->find($this->request->getPost('product_id'));

        if (! $product) {
            return redirect()->back()->withInput()->with('error', 'Produk yang dipilih tidak ditemukan.');
        }

        $qty        = (int) $this->request->getPost('qty');
        $totalPrice = $qty * $product['price'];

        $this->transactionModel->update($id, [
            'user_id'        => $this->request->getPost('user_id'),
            'product_id'     => $this->request->getPost('product_id'),
            'payment_method' => $this->request->getPost('payment_method'),
            'qty'            => $qty,
            'total_price'    => $totalPrice,
        ]);

        return redirect()->to('/transactions')->with('success', 'Transaksi berhasil diperbarui.');
    }

    // DELETE - hapus transaksi
    public function delete($id)
    {
        $transaction = $this->transactionModel->find($id);

        if (! $transaction) {
            return redirect()->to('/transactions')->with('error', 'Transaksi tidak ditemukan.');
        }

        $this->transactionModel->delete($id);

        return redirect()->to('/transactions')->with('success', 'Transaksi berhasil dihapus.');
    }
}
