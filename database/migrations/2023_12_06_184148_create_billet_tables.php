<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilletTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billets', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('email');
            $table->text('phone');
            $table->integer('NbrTicket');
            /*$table->text('TicketForm');*/
            $table->longText('demande');
            $table->timestamps();
        });
    }
    

    /**..............
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('billets');
    }
}


