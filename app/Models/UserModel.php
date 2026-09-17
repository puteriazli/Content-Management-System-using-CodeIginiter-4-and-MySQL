<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'user_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;

    protected $allowedFields = [
        'name',
        'email',
    ];

    // created_at sudah punya default CURRENT_TIMESTAMP di database,
    // jadi tidak perlu diisi manual oleh aplikasi.
    protected $useTimestamps = false;

    protected $validationRules = [
        'name'  => 'required|min_length[2]|max_length[50]',
        'email' => 'permit_empty|valid_email|max_length[100]',
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'Nama wajib diisi.',
        ],
        'email' => [
            'valid_email' => 'Format email tidak valid.',
        ],
    ];

    protected $skipValidation = false;
}
