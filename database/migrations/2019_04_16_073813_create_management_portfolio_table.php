<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagementPortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_portfolio', function (Blueprint $table) {
            $table->increments('id');
            $table->softDeletes();
            $table->integer('property_title_id')->unsigned();
            $table->foreign('property_title_id')->references('id')->on('properties_to_rent')
                    ->onUpdate('cascade')->onDelete('no action');
            $table->string('image_path')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('management_portfolio');
    }
}
