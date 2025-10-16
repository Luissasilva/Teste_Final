<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmaAlunoTable extends Migration
{
    public function up()
    {
        Schema::create('turma_aluno', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_aluno')->constrained('alunos')->onDelete('cascade');
            $table->foreignId('id_turma')->constrained('turmas')->onDelete('cascade');
            $table->timestamps();
            
        
            $table->unique(['id_aluno', 'id_turma']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('turma_aluno');
    }
}