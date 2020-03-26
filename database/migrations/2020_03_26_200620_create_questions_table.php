<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->engine = 'InnoDB';
            $table->string('title');
            $table->text('description');
            $table->integer('round_id')->unsigned();
            $table->timestamps();
        });

        /** 
        Schema::table('questions', function($table) {
            $table->foreign('round_id')->references('id')->on('rounds');
        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
