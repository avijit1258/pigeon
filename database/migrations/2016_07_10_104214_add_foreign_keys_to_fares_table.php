<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToFaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fares', function(Blueprint $table)
        {
            $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
            $table->foreign('seat_type_id')->references('id')->on('seat_types')->onDelete('cascade');
            $table->foreign('boarding_counter')->references('id')->on('counters')->onDelete('cascade');
            $table->foreign('droping_counter')->references('id')->on('counters')->onDelete('cascade');
            $table->foreign('coach_type_id')->references('id')->on('coach_types')->onDelete('cascade');

            $table->foreign('modified_by')->references('id')->on('users')->onDelete('cascade');

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
