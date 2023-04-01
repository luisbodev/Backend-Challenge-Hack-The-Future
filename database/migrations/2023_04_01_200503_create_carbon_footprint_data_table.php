<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarbonFootprintDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carbon_footprint_data', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('quantity');
            $table->enum('frequency', ['mensual', 'diario']);
            $table->foreignId('material_id')->nullable();
            $table->foreignId('type_id');
            $table->foreignId('segment_id');
            $table->foreignId('location_id')->nullable();
            $table->timestamps();

            $table->foreign('material_id')->references('id')->on('materials');
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('segment_id')->references('id')->on('segments');
            $table->foreign('location_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carbon_footprint_data');
    }
}
