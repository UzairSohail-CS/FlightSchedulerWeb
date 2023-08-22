<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->id();
            $table->string('name',14);
            $table->string('number',20);
            $table->string('air',14);
            $table->unsignedbiginteger('traveller_id');
             // This will create relationship at the DBMS level.
             // So, a grey colour foreign key must appear in the students table
             // after performing this migration
            $table->foreign('traveller_id')->references('id')->on('airports')->onDelete('cascade');
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
        Schema::dropIfExists('airports');
    }
}
