<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendants', function (Blueprint $table) {
            $table->id();
            $table->string('name',20);
            $table->string('seat_no',14);
            $table->unsignedbiginteger('type_id');
             // This will create relationship at the DBMS level.
             // So, a grey colour foreign key must appear in the students table
             // after performing this migration
            $table->foreign('type_id')->references('id')->on('attendants')->onDelete('cascade');
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
        Schema::dropIfExists('attendants');
    }
}
