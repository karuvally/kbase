<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('permission_name', 50);
            $table->string('path', 50);
            $table->string('element', 50);
            $table->integer('parent_id')->unsigned();
            $table->foreign('parent_id')->references('id')->on('permission_maps');
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
        Schema::dropIfExists('sub_permissions');
    }
}
