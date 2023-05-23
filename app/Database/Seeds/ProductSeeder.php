<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Lalisa',
            'category'    => 'utlities',
            'Friends'    => 10000,
            'VIiew'    => 100,
        ];

        // Simple Queries
        $this->db->table('products')->insert($data);
        
        $data = [
            'name' => 'Jennie',
            'category'    => 'utlities',
            'Friends'    => 15000,
            'View'    => 200,
        ];
        // Using Query Builder
        $this->db->table('products')->insert($data);
    }
}
