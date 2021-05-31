<?php

namespace App\Controllers;

use App\Models\M_product;

class Product extends BaseController
{
    public function __construct()
    {
        $this->M_product = new M_product();
    }

    public function index()
    {
        $data = [
            'title' => 'Product',
            'product' => $this->M_product->getProduct()
        ];
        return view('pages/v_product', $data);
    }
}
