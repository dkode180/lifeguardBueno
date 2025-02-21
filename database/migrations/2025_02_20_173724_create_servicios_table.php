<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->bigInteger('pais_id')->unsigned();
            $table->string('nombreServicio');
            $table->integer('nClientes');
            $table->integer('nSedes');
            $table->timestamps();
            $table->foreign('pais_id')->references('id')->on('paises')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
