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
        Schema::create('degrees', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable(false); // Ensure this is NOT NULL
            $table->integer('mathematics')->nullable(); // Optional fields
            $table->integer('Clock')->nullable();
            $table->integer('Understanding-speaking')->nullable();
            $table->integer('Language')->nullable();
            $table->integer('Science')->nullable();
            $table->integer('Games')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('degrees');
    }
};
