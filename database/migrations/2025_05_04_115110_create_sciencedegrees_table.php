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
        Schema::create('sciencedegrees', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->integer('body_parts');
            $table->integer('info_inter');
            $table->integer('info_expert');
            $table->integer('Physics');
            $table->integer('Chemistry');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sciencedegrees');
    }
};
