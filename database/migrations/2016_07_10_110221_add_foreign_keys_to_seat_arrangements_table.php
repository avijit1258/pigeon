<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToSeatArrangementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seat_arrangements', function(Blueprint $table)
        {
            $table->foreign('seat_id')->references('id')->on('seats')->onDelete('cascade');
            $table->foreign('seat_type_id')->references('id')->on('seat_types')->onDelete('cascade');

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
