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
            $table->string('reservation_key')->nullable();
            $table->string('name')->nullable();
            $table->string('mail')->nullable();
            $table->bigInteger('phone')->nullable(true);
            $table->date('check_in')->nullable();
            $table->date('check_out')->nullable();
            $table->integer('persons')->nullable();
            $table->boolean('pet')->default(false)->nullable();
            $table->boolean('breakfast')->default(false)->nullable();
            $table->integer('total_price')->nullable();
            $table->foreignId('estancia_id')->nullable();
            $table->foreign('estancia_id')->references('id')->on('estancias');
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
