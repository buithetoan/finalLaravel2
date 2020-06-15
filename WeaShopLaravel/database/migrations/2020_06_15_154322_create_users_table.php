<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('user_name',255);
            $table->integer('level');
            $table->string('email',255);
            $table->date('email_verified_date')->nullable();
            $table->string('password',255);
            $table->string('confirm_password',255);
            $table->string('reset_password',255);
            $table->rememberToken();
            $table->date('created_date')->nullable();
            $table->date('updated_date')->nullable();
            $table->boolean('is_deleted');
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
