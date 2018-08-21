<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('dashboard')->default(0);
            $table->boolean('view_camp_manager')->default(0);
            $table->boolean('create_camp_manager')->default(0);
            $table->boolean('update_camp_manager')->default(0);
            $table->boolean('view_collection_center_manager')->default(0);
            $table->boolean('create_collection_center_manager')->default(0);
            $table->boolean('update_collection_center_manager')->default(0);
            $table->boolean('news')->default(0);
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
        Schema::dropIfExists('permissions');
    }
}
