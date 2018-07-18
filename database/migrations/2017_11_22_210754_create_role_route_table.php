<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleRouteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_route', function (Blueprint $table) {
//            $table->increments('id');
            $table->bigInteger('role_id')->unsigned();
            $table->bigInteger('route_id')->unsigned();
            $table->primary(['role_id', 'route_id']);
            $table->foreign('role_id')
                ->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('no action');
            $table->foreign('route_id')
                ->references('id')->on('routes')
                ->onUpdate('cascade')->onDelete('no action');
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
        Schema::dropIfExists('role_route');
    }
}
