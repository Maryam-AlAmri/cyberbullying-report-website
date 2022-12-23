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
        //
        Schema::create('consultants_register', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('clinic_name');
            $table->string('email');
            $table->string('phone');
            $table->string('place');
            $table->string('work_timing');
            $table->string('workdays');
            $table->string('location');
            $table->string('status');
            $table->string('attachment')->nullable();
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
        //
        Schema::dropIfExists('consultants_register');
    }
};
