<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirportFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airport_flights', function (Blueprint $table) {
            $table->id();
            $table->string('name',20);
            $table->timestamps();
            $table->unsignedbiginteger('airport_id');
            $table->foreign('airport_flight_id')->references('id')->on('airport_flights')->onDelete('cascade');
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
        Schema::dropIfExists('airport_flights');
    }
}
