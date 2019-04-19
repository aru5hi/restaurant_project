<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cust_order', function (Blueprint $table) {
            $table->increments('cid');
            $table->string('name');        
            $table->string('email');
            $table->bigInteger('ph_no')
            $table->string('address');
            $table->string('pay_meth');
            $table->string('del_type');
            $table->string('ord');
            $table->string('ord_id');
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

