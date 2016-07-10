<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeatArrangementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat_arrangements', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('seat_id')->unsigned();
            $table->tinyInteger('row_id');
            $table->tinyInteger('col_id');
            $table->integer('seat_type_id')->unsigned();
            $table->string('seat_name', 20);
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
