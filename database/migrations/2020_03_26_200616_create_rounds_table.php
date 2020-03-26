<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rounds', function (Blueprint $table) {
            $table->id();
            $table->engine = 'InnoDB';
            $table->string('title');
            $table->string('description');
            $table->boolean('status');
            $table->integer('quiz_id')->unsigned();
            $table->timestamps();
        });

        /** 
        Schema::table('rounds', function($table) {
            $table->foreign('quiz_id')->references('id')->on('quizzes');
        }); 
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rounds');
    }
}
