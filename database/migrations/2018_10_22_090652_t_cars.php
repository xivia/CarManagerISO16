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
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('brand_id')->nullable($value = true);
            $table->integer('doors');
            $table->integer('seats');
            $table->double('acceleration', 4, 2);
            $table->integer('ps');
            $table->integer('torque');
            $table->integer('cylinders');
            $table->integer('basePrice');
            $table->enum('transmission', ['manuell', 'automatic']);
            $table->string('drivetrain',50);
            $table->double('weight', 6, 2);
            $table->integer('velocity');
            $table->integer('manufacturingYear');
            $table->string('picture',200)->nullable($value = true);
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
        Schema::dropIfExists('cars');
    }
}
