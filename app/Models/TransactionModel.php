<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table            = 'transaction';
    protected $primaryKey       = 'transaction_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;

    protected $allowedFields = [
        'user_id',
        'product_id',
        'payment_method',
        'qty',
        'total_price',
        'transaction_date',
    ];

    protected $useTimestamps = false;

    protected $validationRules = [
        'user_id'        => 'required|integer',
        'product_id'     => 'required|integer',
        'payment_method' => 'required|in_list[Transfer Bank,COD,E-Wallet,Kartu Kredit,QRIS]',
        'qty'            => 'required|integer|greater_than[0]',
    ];

    protected $validationMessages = [
        'user_id' => [
            'required' => 'User wajib dipilih.',
        ],
        'product_id' => [
            'required' => 'Produk wajib dipilih.',
        ],
        'payment_method' => [
            'required' => 'Metode pembayaran wajib dipilih.',
            'in_list'  => 'Metode pembayaran tidak valid.',
        ],
        'qty' => [
            'required'    => 'Jumlah (qty) wajib diisi.',
            'greater_than' => 'Jumlah (qty) minimal 1.',
        ],
    ];

    protected $skipValidation = false;

    /**
     * Ambil semua transaksi lengkap dengan nama user & nama produk (JOIN)
     */
    public function getAllWithDetails()
    {
        return $this->select('transaction.*, user.name as user_name, product.product_name as product_name')
            ->join('user', 'user.user_id = transaction.user_id')
            ->join('product', 'product.product_id = transaction.product_id')
            ->orderBy('transaction.transaction_id', 'DESC')
            ->findAll();
    }
}
