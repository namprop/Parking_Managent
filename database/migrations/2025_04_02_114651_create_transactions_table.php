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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_id')->nullable(); 
            $table->string('employee_name');
            $table->string('sender');
            $table->string('vehicle_name');
            $table->string('license_plate')->nullable();
            $table->dateTime('check_in');
            $table->dateTime('check_out');
            $table->decimal('price', 10, 2);
            $table->string('payment_method')->default('tiền mặt');
            $table->timestamps();
        
            // Khóa ngoại
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
        
    }
};
