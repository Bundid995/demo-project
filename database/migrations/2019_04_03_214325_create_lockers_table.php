<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLockersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lockers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('guest_id');
            $table->string('unit_name'); 
            $table->unsignedInteger('units_id');
            $table->boolean('is_available');
            $table->timestamps();

            $table->foreign('guest_id')->references('id')->on('guest');
            $table->foreign('units_id')->references('id')->on('units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lockers');
    }
}
