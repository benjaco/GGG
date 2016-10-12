<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->double("price");
            $table->string('model');
            $table->integer("year");
            $table->double("mileage");
            $table->double("insuranceBasePrice");
            $table->integer("seats");
            $table->text("comments");

            $table->timestamps();


            // Pris, Mærke, Model, Årgang, Nuværende kørte km. Forsikrings base-price, Sæder, Kommentar
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cars');
    }
}
