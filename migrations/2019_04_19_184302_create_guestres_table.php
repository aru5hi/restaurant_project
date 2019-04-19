<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('guest_res', function (Blueprint $table) {
            $table->increments('gcid');
            $table->string('name');  
            $table->bigInteger('ph_no')      
            $table->string('date_of_entry');
            $table->date('res_date');
            $table->string('res_time');
            $table->string('type');
            $table->string('party_type');
            $table->int('`no_of_guest');
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


