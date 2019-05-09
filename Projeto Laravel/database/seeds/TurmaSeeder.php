<?php

use Illuminate\Database\Seeder;

class TurmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('turmas')->insert(
        	['curso_id'=> 1,'nivel'=>'Intermediário', 'horario'=>'8:00h', 'diaDaSemana'=>'Sábado']);

        DB::table('turmas')->insert(
        	['curso_id'=> 1,'nivel'=>'Intermediário', 'horario'=>'9:30h', 'diaDaSemana'=>'Sábado']);

        DB::table('turmas')->insert(
        	['curso_id'=> 1, 'nivel'=>'Básico', 'horario'=>'11:00h','diaDaSemana'=>'Sábado']);

        DB::table('turmas')->insert(
        	['curso_id'=> 3, 'nivel'=>'Único', 'horario'=>'13:00h', 'diaDaSemana'=>'Sábado']);
    }
}
