<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonyvekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konyvek', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ssz');
            $table->string('cim');
            $table->string('szerzo');
            $table->string('kiado');
            $table->string('ev');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konyvek');
    }
}