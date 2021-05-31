<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Siswa'];
        return view('pages/v_siswa', $data);
    }

    public function about()
    {
        $data = ['title' => 'About'];

        return view('pages/v_about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'jl.abc',
                    'kota' => 'bandung'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'jl.cba',
                    'kota' => 'Sragen'
                ]
            ]

        ];
        return view('pages/v_contact', $data);
    }
}
