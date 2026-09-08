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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('cour_image', 2048)->nullable();
            $table->string('title_en', 255);
            $table->string('title_ar', 255);
            $table->string('description_en', 255);
            $table->string('description_ar', 255);
            $table->enum('status', ['0', '1'])->default('1');
            $table->decimal('price', 10, 2);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            //$table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade'); this if the id named category_id
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
