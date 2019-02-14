<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('author')->nullable();
            $table->dateTime('blog_date')->nullable();
            $table->string('title')->nullable();
            $table->integer('blog_category_id')->unsigned()->nullable();
            $table->string('image_path')->nullable();
            $table->longText('body')->nullable();
            $table->foreign('blog_category_id')->references('id')
                ->on('blog_categories')->onUpdate('cascade')->onDelete('no action');
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
        Schema::dropIfExists('blogs');
    }
}
