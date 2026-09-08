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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users','id')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories','id')->onDelete('cascade');
            $table->decimal('paid_amount', 10, 2)->default(0); 
            $table->string('payment_status')->default('pending');
            $table->string('transaction_id')->nullable();
            $table->enum('status', ['0', '1'])->default('1');
            $table->timestamps();
          });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
