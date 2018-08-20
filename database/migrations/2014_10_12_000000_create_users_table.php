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
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('address');
            $table->string('city', 30);
            $table->string('district', 30);
            $table->string('state', 30);
            $table->string('co_ordinates', 70);
            $table->string('phone_no', 15);
            $table->string('gender', 2);
            $table->integer('age');
            $table->integer('banned')->default(0);
            $table->integer('rating')->default(0);
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
