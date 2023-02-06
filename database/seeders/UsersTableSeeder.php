<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@nowui.com',
            'endereco' => 'Luanda, Rangel, CTT',
            'telemovel' => '999999999',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now(),

            'role'=>'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'John Doe',
            'username' => 'moleke',
            'email' => 'moleke@gmail.com',
            'endereco' => 'Luanda, Rangel, CTT',
            'telemovel' => '999999999',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now(),
            
            'role'=>'funcionario'
        ]);
        DB::table('users')->insert([
            'name' => 'Richard Roe',
            'username' => 'amado',
            'email' => 'cliente@gmail.com',
            'endereco' => 'Luanda, Rangel, CTT',
            'telemovel' => '999999999',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
            
            'role'=>'cliente'
        ]);
        DB::table('users')->insert([
            'name' => 'Jane Doe',
            'username' => 'justina',
            'email' => 'funcionario@nowui.com',
            'endereco' => 'Luanda, Rangel, CTT',
            'telemovel' => '999999999',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
            
            'role'=>'cliente'
        ]);
        DB::table('users')->insert([
            'name' => 'Lorem Lorem',
            'username' => 'soma',
            'email' => 'funcionario@gmail.com',
            'endereco' => 'Luanda, Rangel, CTT',
            'telemovel' => '999999999',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
            
            'role'=>'funcionario'
        ],
    );
      
    }
}
