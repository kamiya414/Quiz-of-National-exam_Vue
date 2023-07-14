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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->unsignedBigInteger('quiz_year_id');
            $table->unsignedBigInteger('quiz_category_id');
            $table->string('id',10)->primary();
            $table->text('content');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('quiz_year_id')->references('id')->on('quiz_years');
            $table->foreign('quiz_category_id')->references('id')->on('quiz_categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizzes');
    }
};
