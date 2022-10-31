<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_form', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->dateTime('appointment')->nullable();
            $table->string('doctor_consulting')->nullable();
            $table->string('vital_signs')->nullable();
            $table->integer('heart_rate')->nullable();
            $table->string('blood_pressure')->nullable();
            $table->integer('temperature')->nullable();
            $table->integer('oxygen_saturation')->nullable();
            $table->string('reason_for_consultation')->nullable();
            $table->string('allergies')->nullable();
            $table->string('maintenance_medications')->nullable();
            $table->string('current_medications')->nullable();
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
        Schema::dropIfExists('patient_form');
    }
};