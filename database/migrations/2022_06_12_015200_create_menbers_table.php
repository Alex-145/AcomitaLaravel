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
        Schema::create('menbers', function (Blueprint $table) {
            $table->id();
            $table->string('codemenber');
            $table->string('name');
            $table->string('fatherlastname');
            $table->string('motherlastname');
            $table->string('birthdate');
            $table->string('dni');
            $table->string('celphone');
            $table->string('degree');
            $table->string('email');
            $table->string('civilestatus');
            $table->string('address');
            $table->string('ruc');
            $table->string('ubigeo');
            $table->string('menberstatus');
            $table->string('docpatrom');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('menbers');
    }
};
