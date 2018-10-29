<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TCars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tCar', function (Blueprint $table) {
            $table->increments('carId');
            $table->string('carName');
            $table->integer('carBrand');
            $table->integer('carDoors');
            $table->integer('carSeats');
            $table->double('caraAcceleration', 4, 2);
            $table->integer('carPS');
            $table->integer('carTorque');
            $table->integer('carCylinders');
            $table->integer('carBasePrice');
            $table->enum('carTransmission', ['manuell', 'automatic']);
            $table->string('carDrivetrain',50);
            $table->double('carWeight', 6, 2);
            $table->integer('carVelocity');
            $table->integer('carManufacturingYear');
            $table->string('carPicture',200)->nullable($value = true);
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
        Schema::dropIfExists('tCar');
    }
}
