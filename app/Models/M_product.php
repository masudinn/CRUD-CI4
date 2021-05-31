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
}
