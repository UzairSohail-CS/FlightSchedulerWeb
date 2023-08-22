<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('name',20);
            $table->string('from_location',32);
            $table->string('destination',32);
            $table->unsignedbiginteger('passenger_id');
             // This will create relationship at the DBMS level.
             // So, a grey colour foreign key must appear in the students table
             // after performing this migration
            $table->foreign('passenger_id')->references('id')->on('flights')->onDelete('cascade');
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
        Schema::dropIfExists('flights');
    }
}
