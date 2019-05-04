<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CampoDescricaoNota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notas', function (Blueprint $table) {
            $table->string('descricao1')->nullable();
            $table->string('descricao2')->nullable();
            $table->string('descricao3')->nullable();
            $table->string('descricao4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropColumn(['descricao1', 'descricao2', 'descricao3', 'descricao4']);
    }
}
