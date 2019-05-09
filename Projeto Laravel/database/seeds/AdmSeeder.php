<?php

use Illuminate\Database\Seeder;

class AdmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administradors')->insert([
        	'nome'=>"Ricardo",
        	'password'=>Hash::make('vilaronga'),
        	'email'=>'cursosvilaronga@gmail.com'
        ]);
    }
}
