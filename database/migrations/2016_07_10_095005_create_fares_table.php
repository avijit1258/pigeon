<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fares', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('route_id')->unsigned();
            $table->integer('boarding_counter')->unsigned();
            $table->integer('dropping_counter')->unsigned();
            $table->integer('coach_type_id')->unsigned();
            $table->integer('seat_type_id')->unsigned();
            $table->decimal('price');
            $table->decimal('online_price');
            $table->decimal('sell_complete', 2, 1);
            $table->boolean('active_special_price');
            $table->integer('special_price_start_date');
            $table->integer('special_price_end_date');
            $table->decimal('special_price');
            $table->decimal('online_special_price');
            $table->integer('modified_by')->unsigned();
            $table->integer('modification_date');
            $table->remembertoken();
            $table->timestamps();
            // $table->index(['dropping_counter','coach_type_id','seat_type_id','modified_by'], 'dropping_counter');
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
