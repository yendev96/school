<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('p_mieng_1');
            $table->integer('p_mieng_2');
            $table->integer('p_mieng_3');
            $table->integer('p_15p_1');
            $table->integer('p_15p_2');
            $table->integer('p_15p_3');
            $table->integer('p_45p_1');
            $table->integer('p_45p_2');
            $table->integer('p_semester');
            $table->integer('p_total');
            $table->integer('student_id');
            $table->integer('subject_id');
            $table->integer('semester');
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
         Schema::dropIfExists('point');
    }
}
