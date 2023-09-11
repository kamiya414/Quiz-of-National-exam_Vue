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
       Schema::create('explanations', function (Blueprint $table) {
           $table->id();
           $table->unsignedBigInteger('user_id');
           $table->string('quiz_id');
           $table->text('content');
           $table->timestamps();
           $table->softDeletes();

           $table->foreign('quiz_id')->references('id')->on('quizzes'); #外部キー挿入
           $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('explanations');
    }
};
