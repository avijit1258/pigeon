<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('bus_number', 45)->nullable();
            $table->integer('seats')->nullable();
            $table->integer('company_id')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->integer('modification_date');
            $table->rememberToken();
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
