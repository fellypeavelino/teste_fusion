<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MotoristaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motoristas')->insert([
            'nome' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'cpf'  => Str::random(12), 
            'situacao' => 'L' 
        ]);
    }
}
