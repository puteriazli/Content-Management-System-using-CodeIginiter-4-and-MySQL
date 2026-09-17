<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table            = 'product';
    protected $primaryKey       = 'product_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;

    protected $allowedFields = [
        'product_name',
        'qty_in_stock',
        'price',
    ];

    // Timestamp tidak dipakai, tabel product tidak punya kolom created_at/updated_at
    protected $useTimestamps = false;

    // Validasi
    protected $validationRules = [
        'product_name' => 'required|min_length[2]|max_length[100]',
        'qty_in_stock' => 'required|integer|greater_than_equal_to[0]',
        'price'        => 'required|decimal|greater_than_equal_to[0]',
    ];

    protected $validationMessages = [
        'product_name' => [
            'required' => 'Nama produk wajib diisi.',
        ],
        'qty_in_stock' => [
            'required' => 'Stok wajib diisi.',
            'integer'  => 'Stok harus berupa angka bulat.',
        ],
        'price' => [
            'required' => 'Harga wajib diisi.',
            'decimal'  => 'Harga harus berupa angka.',
        ],
    ];

    protected $skipValidation = false;
}
