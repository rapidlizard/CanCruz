<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarsTable extends Migration
{

    public function up()
    {
        Schema::create('calendars', function (Blueprint $table) {
            $table->id();
            $table->string('reservation_key');
            $table->date('check-in');
            $table->date('check-out');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('calendars');
    }
}
