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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('vehicle_types_id');
            $table->string('tennguoigui')->nullable(); 
            $table->string('bienso')->unique(); // Biển số xe
            $table->date('ngaygui'); // Ngày gửi
            $table->timestamps();
            // Foreign key constraints
            $table->foreign('vehicle_types_id')->references('id')->on('vehicle_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
