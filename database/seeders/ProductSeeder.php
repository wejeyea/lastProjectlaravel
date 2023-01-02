<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'category' => 'Beauty',
            'name' => 'COPY PASTE BREATHABLE MESH CUSHION SPF 33 PA++',
            'detail' => 'COPY & PASTE healthy & glowing complexion to your skin',
            'price' => 185900,
            'image' => 'cushion.jpeg',
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);
    }
}
