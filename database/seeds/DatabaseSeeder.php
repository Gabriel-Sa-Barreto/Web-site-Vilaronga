<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CursosSeeder::class);
        $this->call(TurmaSeeder::class);
        $this->call(AlunosSeeder::class);
        $this->call(EnderecoSeeder::class);
    }
}
