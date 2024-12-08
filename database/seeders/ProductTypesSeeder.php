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
        DB::table('product_types')->insert(
            [
            'tipo' => 'SAM GPS-CAM',
            'image' => '20220418024921.png',
            'preco' => '20.000',
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
            ]
        );
            DB::table('product_types')->insert(
            [
            'tipo' => 'SAM Home-Kit',
            'image' => '20220418015221.jpeg',
            'preco' => '52.000',
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
            DB::table('product_types')->insert(
            [
            'tipo' => 'SAM Portable-GPS-CAM',
            'image' => '20220418025628.jpeg',
            'preco' => '48.000',
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
            DB::table('product_types')->insert(
            [
            'tipo' => 'SAM Kit-GPS-CAM',
            'image' => '20220418013013.png',
            'preco' => '52.000',
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
            DB::table('product_types')->insert(
            [
            'tipo' => 'SAM Mini-Portable-Kit',
            'image' => '20220418133555.jpeg',
            'preco' => '32.000',
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
            ],
    );
    }
}
