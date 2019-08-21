<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'AMPLIFICADORES MONOBLOCK',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
