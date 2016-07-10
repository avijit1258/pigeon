<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('route_name', 200);
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
