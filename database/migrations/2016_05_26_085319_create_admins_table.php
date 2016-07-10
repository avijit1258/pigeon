<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 100);
            $table->string('password');
            $table->enum('type', array('super_admin','admin'));
            $table->string('fullname', 100);
            $table->boolean('active');
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
