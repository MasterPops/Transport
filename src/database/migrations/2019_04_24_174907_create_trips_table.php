<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user')->unsigned();
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('car')->unsigned();
            $table->foreign('car')->references('id')->on('cars')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('driver')->unsigned();
            $table->foreign('driver')->references('id')->on('drivers')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('status')->unsigned()->default(1);
            $table->foreign('status')->references('id')->on('statuses_trips')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('customer')->unsigned();
            $table->foreign('customer')->references('id')->on('customers')->onDelete('RESTRICT')->onUpdate('RESTRICT');
            $table->bigInteger('mileage_before')->unsigned();
            $table->bigInteger('mileage_after')->unsigned()->nullable();
            $table->double('price',15,2)->unsigned();
            $table->double('sum',15,2)->unsigned()->nullable();
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
        Schema::dropIfExists('trips');
    }
}
