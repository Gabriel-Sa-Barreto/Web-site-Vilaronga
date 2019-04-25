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
        	['curso_id'=> 1, 'senhaTurma'=>'ingles', 'nivel'=>'Básico', 'horario'=>'8:00h']);

        DB::table('turmas')->insert(
        	['curso_id'=> 2, 'senhaTurma'=>'espanhol', 'nivel'=>'Básico', 'horario'=>'10:00h']);

        DB::table('turmas')->insert(
        	['curso_id'=> 3, 'senhaTurma'=>'redação', 'nivel'=>'Único', 'horario'=>'11:00h']);

        DB::table('turmas')->insert(
        	['curso_id'=> 1, 'senhaTurma'=>'ingles2', 'nivel'=>'Avançado', 'horario'=>'14:30h']);
    }
}
