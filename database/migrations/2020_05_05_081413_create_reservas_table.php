<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('reservation_key');
            $table->string('name')->nullable(false);
            $table->string('mail')->nullable(false);
            $table->bigInteger('phone')->nullable(true);
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('persons')->nullable(false);
            $table->boolean('pet')->default(false);
            // $table->integer('total_price');
            // $table->foreignId()
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
        Schema::dropIfExists('reservas');
    }
}
