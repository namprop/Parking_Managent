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
            $table->unsignedBigInteger('vehicle_id'); // FK -> vehicles.mave
            $table->unsignedBigInteger('user_id')->nullable(); // FK -> users (người xác nhận thanh toán)
            $table->dateTime('thoigianra');
            $table->decimal('sotien', 10, 2);
            $table->string('hinhthucthanhtoan')->default('tiền mặt');
            $table->timestamps();
        
            // Khóa ngoại
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
