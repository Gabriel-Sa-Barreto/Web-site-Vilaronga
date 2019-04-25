<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('professors')->insert(
            ['nome'=>'Samuel', 'telefone'=>'75981018840', 'email'=>'samvlima10@gmail.com',
             'password'=>Hash::make('samuel') , 'curso_id' => 1
        ]);

        DB::table('professors')->insert(
            ['nome'=>'Joao', 'telefone'=>' 7593434234', 'email'=>'joao@gmail.com',
             'password'=>Hash::make('joaovc') , 'curso_id' => 3
        ]);

        DB::table('professors')->insert(
            ['nome'=>'Kaio', 'telefone'=>'75934323231', 'email'=>'kaio@gmail.com',
             'password'=>Hash::make('kaiovc') , 'curso_id' => 2
        ]);

        DB::table('professors')->insert(
            ['nome'=>'Elisangela', 'telefone'=>'7534543234', 'email'=>'elisangela@gmail.com',
             'password'=>Hash::make('elisangela') , 'curso_id' => 1
        ]);
    }    
}
