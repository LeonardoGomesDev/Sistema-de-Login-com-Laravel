<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableAlunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 30);
            $table->string('curso', 30);
            $table->int('matricula', 20);
            $table->int('semestre', 20);
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        }); 
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('alunos');
    }
}
