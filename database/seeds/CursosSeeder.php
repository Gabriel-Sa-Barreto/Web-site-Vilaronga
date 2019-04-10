<?php

use Illuminate\Database\Seeder;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert(['nome'=>'Inglês']);
        DB::table('cursos')->insert(['nome'=>'Espanhol']);
        DB::table('cursos')->insert(['nome'=>'Português/Redação']);
    }
}
