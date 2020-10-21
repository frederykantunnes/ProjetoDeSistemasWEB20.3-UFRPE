<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("curso");
            $table->string("detalhes");
            $table->string("ch");
            $table->string("tp1nome");
            $table->string("tp1conteudo","4000");
            $table->string("tp1link");
            $table->string("tp2nome");
            $table->string("tp2conteudo","4000");
            $table->string("tp2link");
            $table->string("tp3nome");
            $table->string("tp3conteudo","3000");
            $table->string("tp3link");
            $table->string("tp4nome");
            $table->string("tp4conteudo","2000");
            $table->string("tp4link");
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
        Schema::dropIfExists('cursos');
    }
}
