<?php

use Illuminate\Database\Seeder;

class AlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alunos')->insert(
        	['nome'=>'Gabriel', 'telefone'=>'75981018840', 'email'=>'bielbarretoalves@gmail.com',
             'password'=>'gabriel'
        ]);

        DB::table('alunos')->insert(
        	['nome'=>'Thiago', 'telefone'=>' 7593434234', 'email'=>'thiago@gmail.com',
             'password'=>'thiago'
        ]);

        DB::table('alunos')->insert(
        	['nome'=>'Daniel', 'telefone'=>'75934323231', 'email'=>'dan@gmail.com',
             'password'=>'daniel'
        ]);

        DB::table('alunos')->insert(
        	['nome'=>'Augusto', 'telefone'=>'7534543234', 'email'=>'augusto@gmail.com',
             'password'=>'augusto'
        ]);
    }
}
