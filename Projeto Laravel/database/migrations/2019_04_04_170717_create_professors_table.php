<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professors', function (Blueprint $table) {
            //$table->integer('user_id')->unsigned();
            //$table->foreign('user_id')->references('id')->on('users');
            //$table->primary('user_id'); //transforma esse campo em chave primária.
            $table->increments('id');
            $table->integer('curso_id')->unsigned();
            $table->foreign('curso_id')->references('id')->on('cursos'); //chave estrangeira
            $table->string('nome');
            $table->string('telefone');
            $table->string('email',100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professors');
    }
}
