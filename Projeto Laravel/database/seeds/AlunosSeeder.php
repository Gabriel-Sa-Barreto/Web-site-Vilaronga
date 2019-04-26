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
        	['nome'=>'Gabriel Sá Barreto Alves', 'telefone'=>'75981018840', 'email'=>'bielbarretoalves@gmail.com',
             'password'=>Hash::make('gabriel')
        ]);

        DB::table('alunos')->insert(
        	['nome'=>'Thiago', 'telefone'=>' 7593434234', 'email'=>'thiago@gmail.com',
             'password'=>Hash::make('thiago')
        ]);

        DB::table('alunos')->insert(
        	['nome'=>'Daniel', 'telefone'=>'75934323231', 'email'=>'dan@gmail.com',
             'password'=>Hash::make('daniel')
        ]);

        DB::table('alunos')->insert(
        	['nome'=>'Augusto', 'telefone'=>'7534543234', 'email'=>'augusto@gmail.com',
             'password'=>Hash::make('augusto')
        ]);
    }
}
