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
        Schema::create('translatedegrees', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->integer('Translation_kids')->nullable();
            $table->integer('Translation_intermidate')->nullable();
            $table->integer('Translation_expert')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translatedegrees');
    }
};
