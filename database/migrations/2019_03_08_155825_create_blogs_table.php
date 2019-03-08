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
            $table->integer('blog_category_id')->unsigned();
            $table->foreign('blog_category_id')->references('id')
                ->on('blog_categories')->onUpdate('cascade')->nDelete('no action');
            $table->date('date');
            $table->string('author')->nullable();
            $table->string('blog_title')->nullable();
            $table->string('media_path')->nullable();
            $table->longText('blog_body')->nullable();
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
