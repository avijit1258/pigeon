<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRouteZonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_zones', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('route_id')->unsigned();
            $table->integer('zone_id')->unsigned();
            $table->boolean('sequel');
            $table->integer('modified_by')->unsigned();
            $table->integer('modification_date');
            $table->remembertoken();
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
        //
    }
}
