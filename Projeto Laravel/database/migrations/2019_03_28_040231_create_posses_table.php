<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePossesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posses', function (Blueprint $table) {
            //id do aluno e id da turma como primárias, id das notas como secundário
            $table->integer('aluno_id')->unsigned();
            $table->foreign('aluno_id')->references('id')->on('alunos');
            
            $table->integer('turma_id')->unsigned();
            $table->foreign('turma_id')->references('id')->on('turmas');
            
            $table->primary(['aluno_id', 'turma_id']);

            $table->integer('nota_id')->unsigned();
            $table->foreign('nota_id')->references('id')->on('notas');

            $table->string('data_inicio');
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
        Schema::dropIfExists('posses');
    }
}
