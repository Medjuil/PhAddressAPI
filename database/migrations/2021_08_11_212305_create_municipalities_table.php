<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipalities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('country_code');
            $table->unsignedBigInteger('region_code');
            $table->unsignedBigInteger('province_code');

            $table->foreign('country_code')->references('id')->on('countries')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('region_code')->references('id')->on('regions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('province_code')->references('id')->on('provinces')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipalities');
    }
}
