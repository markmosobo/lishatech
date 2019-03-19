<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreatePropertiesToRentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties_to_rent', function (Blueprint $table) {
            $table->increments('id');
            $table->string('property_name')->nullable();
            $table->string('address')->nullable();
            $table->string('status')->nullable();
            $table->bigInteger('rent')->nullable();
            $table->string('image_path')->nullable();
            $table->longText('description')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('properties_to_rent');
    }
}