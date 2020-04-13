<?php

use App\Categoria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(['nombre' => 'Escuela']);
        DB::table('categorias')->insert(['nombre' => 'Trabajo']);
        Categoria::create(['nombre' => 'Diversion']);
    }
}
