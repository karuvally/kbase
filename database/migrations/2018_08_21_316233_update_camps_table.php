<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('camps', function (Blueprint $table) {
            $table->unsignedInteger('area_id')->nullable();
            $table->string('location');
            $table->text('contact_details');
            $table->string('max_capacity');
            $table->string('location_coordinates');
            $table->boolean('is_collection_center');
            $table->foreign('area_id')->references('id')->on('areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('camps', function (Blueprint $table) {

            $table->dropForeign('camps_area_id_foreign');

            $table->dropColumn('area_id');
            $table->dropColumn('location');
            $table->dropColumn('contact_details');
            $table->dropColumn('max_capacity');
            $table->dropColumn('location_coordinates');
            $table->dropColumn('is_collection_center');
        });
    }
}
