<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('busesshedule', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('operator');
            $table->string('seat_row');
            $table->string('seat_column');
            $table->string('route');
            $table->double('fare');
            $table->string('departure');
            $table->string('arrival');
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
        Schema::dropIfExists('busesshedule');
    }
}
