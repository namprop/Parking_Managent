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
        Schema::create('price_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_type_id');
            $table->string('duration_label');
            $table->integer('duration');
            $table->integer('price');
           
            $table->unique(['vehicle_type_id', 'duration']);
            $table->unique(['vehicle_type_id', 'duration_label']);
            $table->foreign('vehicle_type_id')->references('id')->on('vehicle_types')->onDelete('cascade');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_lists');
    }
};
