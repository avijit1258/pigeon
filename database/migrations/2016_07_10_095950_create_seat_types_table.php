<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeatTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat_types', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('seat_type_name', 100);
            $table->string('seat_data', 200);
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
