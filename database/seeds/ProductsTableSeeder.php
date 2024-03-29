<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'sku' => 'T2500-1BDCP',
            'name' => 'ROCKFORD 2500 RMS',
            'category_id' => 10,
            'description' => '',
            'comments' => '',
            'stock' => 10,
            'cost' => 0,
            'price' => 1237.00,
            'rack' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'sku' => 'T1500-1BDCP',
            'name' => 'ROCKFORD 1500 RMS',
            'category_id' => 10,
            'description' => '',
            'comments' => '',
            'stock' => 10,
            'cost' => 0,
            'price' => 621.00,
            'rack' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'sku' => 'T1000-1bdCP',
            'name' => 'ROCKFORD 1000 RMS',
            'category_id' => 10,
            'description' => '',
            'comments' => '',
            'stock' => 10,
            'cost' => 0,
            'price' => 590.00,
            'rack' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
