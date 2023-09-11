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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('quiz_year_id')->nullable();
            $table->integer('quiz_category_id')->nullable();
            $table->enum('range', ['all', 'perfect','weak','to_be_ans']);
            $table->integer('num_of_que');
            $table->enum('sort', ['asc', 'desc','random']);
            $table->boolean('limit');
            $table->integer('time_limit')->default(60);
            $table->timestamps();
            
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
        Schema::dropIfExists('settings');
    }
};
