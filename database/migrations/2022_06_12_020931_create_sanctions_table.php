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
        Schema::create('sanctions', function (Blueprint $table) {
            $table->id();
            $table->string('amount');
            $table->string('reason');
            $table->unsignedBigInteger('menber_id');
            $table->unsignedBigInteger('stand_id');
            $table->foreign('menber_id')->references('id')->on('menbers')->onDelete('cascade');
            $table->foreign('stand_id')->references('id')->on('stands')->onDelete('cascade');
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
        Schema::dropIfExists('sanctions');
    }
};
