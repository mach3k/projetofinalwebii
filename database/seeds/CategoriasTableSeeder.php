<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $registro = new \App\Categoria();
		$registro->nome = 'Informática';
		$registro->save();

        $registro = new \App\Categoria();
		$registro->nome = 'Construção Civil';
		$registro->save();

        $registro = new \App\Categoria();
		$registro->nome = 'Alimentação';
		$registro->save();
    }
}
