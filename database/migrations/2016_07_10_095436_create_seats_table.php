<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seats', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('seat_name', 100);
            $table->tinyInteger('row');
            $table->tinyInteger('col');
            $table->integer('company_id')->unsigned();
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
