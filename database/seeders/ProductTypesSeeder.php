<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product_types')->insert([
            'tipo' => 'SAM GPS-CAM',
            'image' => '20220418024921.jpeg',
            'quantidade' => 1,
            'descricao' => nl2br("Dimensões 118,6 x 83,9 mm (D x P) \n
            Peso
            293 gr.\n
            Gravação
            por eventos, gravação manual, gravação contínua e reprodução remota\n
            Resolução
            HD 720p\n
            Visão noturna
            Sim"),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
