<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'admin',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
            'nama'     => 'Administrator',
            'level'    => 'superadmin',
        ];
        $this->db->table('admin')->insert($data);
    }
} 