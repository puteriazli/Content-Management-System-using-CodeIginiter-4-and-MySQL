<?php

namespace App\Controllers;

# GitHub = https://github.com/puteriazli
# LinkedIn = https://www.linkedin.com/in/puteriazli

use App\Models\ProductModel;
use App\Models\TransactionModel;
use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $userModel        = new UserModel();
        $productModel      = new ProductModel();
        $transactionModel  = new TransactionModel();

        $data['totalUsers']        = $userModel->countAll();
        $data['totalProducts']     = $productModel->countAll();
        $data['totalTransactions'] = $transactionModel->countAll();

        return view('dashboard/index', $data);
    }
}
