<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UrgenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('urgencies')->insert([
            'estado'=>'Encaminhado',
            'user_id'=>'3'
        ]);
        DB::table('urgencies')->insert([
            'estado'=>'Encaminhado',
            'user_id'=>'3'
        ]);
        DB::table('urgencies')->insert([
            'estado'=>'Descartado',
            'user_id'=>'3'
        ]);
        DB::table('urgencies')->insert([
            'estado'=>'Descartado',
            'user_id'=>'3'
        ],
    );
        DB::table('urgencies')->insert([
           'estado'=>'Encaminhado',
           'user_id'=>'3']
    );
    }
}
