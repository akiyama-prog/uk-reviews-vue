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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('restaurant_id')->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->text('review')->nullable();
            $table->string('password', 15);
            $table->text('images')->nullable();
            $table->string('name', 30);
            $table->string('twitter')->nullable();
            $table->string('insta')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
