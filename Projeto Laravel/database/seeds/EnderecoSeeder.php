<?php

use Illuminate\Database\Seeder;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enderecos')->insert([
        	'aluno_id'=> 1, 
        	'rua'     => 'Rua H',
        	'numero'  =>  14,
        	'bairro'  =>  'Muchila',
        	'cidade'  =>  'Feira de Santana',
        	'cep'     =>  '44006406'
        ]);


        DB::table('enderecos')->insert([
        	'aluno_id'=> 2, 
        	'rua'     => 'Rua A',
        	'numero'  =>  34,
        	'bairro'  =>  'George Américo',
        	'cidade'  =>  'Feira de Santana',
        	'cep'     =>  '44006343'
        ]);


        DB::table('enderecos')->insert([
        	'aluno_id'=> 3, 
        	'rua'     => 'Rua B',
        	'numero'  =>  20,
        	'bairro'  =>  'Asa Branca',
        	'cidade'  =>  'Feira de Santana',
        	'cep'     =>  '44006456'
        ]);

        DB::table('enderecos')->insert([
        	'aluno_id'=> 4, 
        	'rua'     => 'Rua F',
        	'numero'  =>  14,
        	'bairro'  =>  'SIM',
        	'cidade'  =>  'Feira de Santana',
        	'cep'     =>  '4400406'
        ]);
    }
}
