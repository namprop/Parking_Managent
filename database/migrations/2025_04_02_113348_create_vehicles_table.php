<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->unsignedBigInteger('users_id')->nullable(); 
            $table->string('sender_name')->nullable(); 
            $table->string('license_plate')->nullable(); // Biển số xe
            $table->timestamp('check_in')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
            // Foreign key constraints
            $table->foreign('vehicle_types_id')->references('id')->on('vehicle_types')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
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
