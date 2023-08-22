<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('price',10);
            $table->string('name',20);
            $table->string('size',05);

            $table->unsignedbiginteger('brands_id');
             // This will create relationship at the DBMS level.
             // So, a grey colour foreign key must appear in the students table
             // after performing this migration
            $table->foreign('brands_id')->references('id')->on('brands')->onDelete('cascade');

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
        Schema::dropIfExists('products');
    }
}
