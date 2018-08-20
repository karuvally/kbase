<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_maps', function (Blueprint $table) {
            $table->increments('map_id');
            $table->integer('group_id');
            $table->foreign('group_id')->references('group_id')->on('user_groups')->onDelete('cascade');
            $table->integer('permission_id');
            $table->foreign('permission_id')->references('permission_id')->on('user_permissions')->onDelete('cascade');

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
        Schema::dropIfExists('user_maps');

    }
}
