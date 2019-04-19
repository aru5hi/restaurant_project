<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
Schema::create('guest_order', function (Blueprint $table) {
            $table->increments('ordid');
            $table->string('name');        
            $table->string('email');
            $table->bigInteger('ph_no')
            $table->string('address');
            $table->string('pay_meth');
            $table->string('del_type');
            $table->string('ord');
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

