<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('cid');
            $table->string('fname');
            $table->string('lname');        
            $table->string('email');
            $table->bigInteger('ph_no')
            $table->string('address');
            $table->string('user_pass');
        });
        
    }


// custorder
    
    


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }

}

