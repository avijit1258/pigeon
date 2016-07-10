<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            

            $table->increments('id');
            $table->string('username', 100)->unique();
            $table->string('password');
            $table->enum('type', array('admin','manager','counterman','online_sell'));
            $table->string('fullname', 100);
            $table->boolean('active');
            $table->integer('company_id')->unsigned();
            $table->timestamps();
            $table->remembertoken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
