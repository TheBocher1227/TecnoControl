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
        Schema::create('citas', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('service_id');
            $table->foreign('user_id')->references('id')-> on ('users');
            $table->foreign('service_id')->references('id')-> on ('services');
            $table->dateTime('fecha_cita');
            $table->dateTime('fecha_cancelacion')->nullable();
            $table->dateTime('fecha_reagendacion')->nullable();
            $table->string('comment')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      schema::dropIfExists('citas');
    }
};
