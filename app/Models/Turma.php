<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmasTable extends Migration
{
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->id();
            $table->string('descricao', 100);
            $table->foreignId('id_curso')->constrained('cursos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('turma');
    }
}

