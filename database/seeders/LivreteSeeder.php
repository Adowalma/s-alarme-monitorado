<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LivreteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('livretes')->insert([
            'marca'=>'Toyota',
            'modelo'=>'xxx',
            'matricula'=>'LD-12-34-AB',
            'motor'=>'xxx',
            'quadro'=>'xxx',
            'pneumaticos'=>'xxx',
            'servico'=>'xxx',
            'peso_bruto'=>'xxx',
            'combustivel'=>'xxx',
            'distancia_eixos'=>'xxx',
            'data_emissao'=>'2020-05-12',
            
        ]);
        DB::table('livretes')->insert([
            'marca'=>'Toyota',
            'modelo'=>'xxx',
            'matricula'=>'LD-12-34-BC',
            'motor'=>'xxx',
            'quadro'=>'xxx',
            'pneumaticos'=>'xxx',
            'servico'=>'xxx',
            'peso_bruto'=>'xxx',
            'combustivel'=>'xxx',
            'distancia_eixos'=>'xxx',
            'data_emissao'=>'2020-05-12',
            
        ]);
        DB::table('livretes')->insert([
            'marca'=>'Toyota',
            'modelo'=>'xxx',
            'matricula'=>'LD-12-34-CD',
            'motor'=>'xxx',
            'quadro'=>'xxx',
            'pneumaticos'=>'xxx',
            'servico'=>'xxx',
            'peso_bruto'=>'xxx',
            'combustivel'=>'xxx',
            'distancia_eixos'=>'xxx',
            'data_emissao'=>'2020-05-12',
            
        ]);
        DB::table('livretes')->insert([
            'marca'=>'Toyota',
            'modelo'=>'xxx',
            'matricula'=>'LD-12-34-DE',
            'motor'=>'xxx',
            'quadro'=>'xxx',
            'pneumaticos'=>'xxx',
            'servico'=>'xxx',
            'peso_bruto'=>'xxx',
            'combustivel'=>'xxx',
            'distancia_eixos'=>'xxx',
            'data_emissao'=>'2020-05-12',
            
        ],
    );
        DB::table('livretes')->insert([
            'marca'=>'Toyota',
            'modelo'=>'xxx',
            'matricula'=>'LD-12-34-EF',
            'motor'=>'xxx',
            'quadro'=>'xxx',
            'pneumaticos'=>'xxx',
            'servico'=>'xxx',
            'peso_bruto'=>'xxx',
            'combustivel'=>'xxx',
            'distancia_eixos'=>'xxx',
            'data_emissao'=>'2020-05-12',            
        ],
    );
    }
}
