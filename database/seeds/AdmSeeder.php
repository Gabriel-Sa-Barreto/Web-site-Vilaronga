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
        	'nome'=>"Biel",
        	'password'=>Hash::make('biel123'),
        	'email'=>'bielbarretoalves@gmail.com'
        ]);
    }
}
