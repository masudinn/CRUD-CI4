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

    public function add()
    {
        $data = [
            'title' => 'Form Product'
        ];
        return view('pages/v_add', $data);
    }

    public function save()
    {
        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'deskripsi_produk' => $this->request->getPost('nama_produk')
        ];
        $this->M_product->insertProduct($data);
        session()->setFlashData('success', 'Data masuk');
        return redirect()->to('/product');
    }
}
