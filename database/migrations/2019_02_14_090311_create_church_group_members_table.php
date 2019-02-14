<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChurchGroupMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('church_group_members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->unsigned()->nullable();
            $table->integer('church_group_id')->unsigned()->nullable();
            $table->string('role')->nullable();
            $table->foreign('church_group_id')->references('id')->on('church_groups')
                ->onUpdate('cascade')->onDelete('no action');
            $table->foreign('member_id')->references('id')->on('members')
                    ->onUpdate('cascade')->onDelete('no action');
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
        Schema::dropIfExists('church_group_members');
    }
}
