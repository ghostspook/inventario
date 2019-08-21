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
            'name' => 'ACCESORIOS CONECTORES PARA USB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'ADAPTADORES USB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'AISLADOR DE RUIDO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'AMPLIFICADOR DE FUENTE DE PODER',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'AMPLIFICADOR MARINOS PEQUEÑOS',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'AMPLIFICADORES 2 CANALES',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'AMPLIFICADORES 4 CANALES',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'AMPLIFICADORES 5 CANALES',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'AMPLIFICADORES MARINOS PEQUEÑOS',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'AMPLIFICADORES MONOBLOCK',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'AMPLIFICADORES MONOBLOCK O CANAL 1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'AMPLIFICADORES PRIME',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'APLICADORES',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'BAJOS',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'BAJOS AUTO SOUND',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'BAJOS MARINO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
