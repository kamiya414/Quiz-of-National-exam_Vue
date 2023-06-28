<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


 return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choices', function (Blueprint $table) {
            $table->id();
            $table->string('quiz_title');
            $table->text('content');
            $table->tinyInteger('answer');
            $table->timestamps();
            $table->softDeletes();
            
             $table->foreign('quiz_title')->references('title')->on('quizzes'); #外部キー挿入
        });
     }
     public function down()
     {
         Schema::dropIfExists('choices');

     }
};