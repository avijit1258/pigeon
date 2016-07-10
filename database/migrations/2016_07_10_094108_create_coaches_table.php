<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coaches', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('coach_name', 100);
            $table->integer('coach_type_id')->unsigned();
            $table->integer('route_id')->unsigned();
            $table->integer('seat_id')->unsigned();
            $table->integer('starting_counter_id')->unsigned();
            $table->time('starting_time');
            $table->integer('ending_counter_id')->unsigned();
            $table->time('ending_time');
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
