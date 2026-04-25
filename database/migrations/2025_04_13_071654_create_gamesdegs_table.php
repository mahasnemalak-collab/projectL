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
        Schema::create('gamesdegs', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->integer('guess_the_sample');
            $table->integer('series_numbers');
            $table->integer('hiding_img');
            $table->integer('discrate_words');
            $table->integer('guess_the_country');
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gamesdegs');
    }
};
