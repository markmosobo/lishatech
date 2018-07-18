<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('mf_id')->unsigned();
            $table->foreign('mf_id')
                ->references('id')->on('masterfiles')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->bigInteger('role_id')->unsigned();
            $table->foreign('role_id')
                ->references('id')->on('roles')->onUpdate('cascade')->onDelete('no action');
            $table->bigInteger('tenant_id')->unsigned();
            $table->foreign('tenant_id')->references('id')->on('tenants')
                ->onUpdate('cascade');
            $table->bigInteger('created_by')->unsigned()->index();
            $table->boolean('password_changed')->default(false);
            $table->boolean('email_confirmed')->default(false);
            $table->boolean('account_status')->default(true);
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
