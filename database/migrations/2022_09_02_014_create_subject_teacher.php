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
        Schema::create('subject_teacher', function (Blueprint $table) {
            $table->id();
            $table->string('subject_type', 255);
            $table->integer('marks');
            $table->integer('validation');
            $table->unsignedBigInteger('teacher_id')->index();
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->unsignedBigInteger('subject_id')->index();
            $table->foreign('subject_id')->references('id')->on('subjects');
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
        Schema::dropIfExists('subject_teacher');
    }
};
