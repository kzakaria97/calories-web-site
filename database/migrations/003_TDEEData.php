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
        Schema::create('t_d_e_e_data', function (Blueprint $table) {
            $table->id();
            $table->integer('age');
            $table->integer('taille');
            $table->boolean('sexe');
            $table->integer('poid');
            $table->integer('calorie');
            $table->integer('activity');
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
        Schema::dropIfExists('t_d_e_e_data');
    }
};
