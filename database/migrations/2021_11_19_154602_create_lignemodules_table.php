<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLignemodulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lignemodules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professeur_id');
            $table->foreignId('module_id');
            $table->foreignId('user_id');
             $table->date('dated');
            $table->date('datef');
            $table->string('volumeH'); 

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
        Schema::dropIfExists('lignemodules');
    }
}
