<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_features', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_title_id')->unsigned();
            $table->string('type')->nullable();
            $table->bigInteger('area')->nullable();
            $table->string('building_age')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('kitchen')->nullable();
            $table->integer('garage')->nullable();
            $table->string('cooling')->nullable();
            $table->string('heating')->nullable();
            $table->string('sewer')->nullable();
            $table->string('water')->nullable();
            $table->string('other_features')->nullable();
            $table->foreign('property_title_id')->references('id')
                ->on('properties')->onUpdate('cascade')->onDelete('no action');
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
        Schema::dropIfExists('property_features');
    }
}
