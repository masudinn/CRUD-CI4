<?php

namespace App\Models;

use CodeIgniter\Model;


class M_product extends Model
{
    public function getProduct()
    {
        return $this->db->table('tb_product')->get()->getResultArray();
    }

    public function insertProduct($data)
    {
        return $this->db->table('tb_product')->insert($data);
    }
    public function editProduct($id_produk)
    {
        return $this->db->table('tb_product')->where('id_produk', $id_produk)->get()->getRowArray();
    }
    public function updateProduct($data, $id_produk)
    {
        return $this->db->table('tb_product')->update($data, array('id_produk' => $id_produk));
    }
    public function deleteProduct($id_produk)
    {
        return $this->db->table('tb_product')->delete(array('id_produk' => $id_produk));
    }
}
