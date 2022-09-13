<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2017051026',
                'nama'    => 'Aditya Apri Nugroho',
                'alamat' => 'Lampung',
                'created_at' =>Time::now(),
            ],
            [
                'npm' => '2017051029',
                'nama'    => 'Joko',
                'alamat' => 'Lampung',
                'created_at' =>Time::now(),
            ],
            [
                'npm' => '2017051000',
                'nama'    => 'Susi',
                'alamat' => 'Lampung',
                'created_at' =>Time::now(),
            ]
        ];
        // Using Query Builder
        foreach($data_mahasiswa as $data){
            $this->db->table('mahasiswa')->insert($data);

        }
        
    }
}
