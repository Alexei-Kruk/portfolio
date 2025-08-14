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
        Schema::create('experience_stacks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('experience_id');
            $table->unsignedBigInteger('stack_id');

            $table->foreign('experience_id')->references('id')->on('experiences')->onDelete('cascade');
            $table->foreign('stack_id')->references('id')->on('stacks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience_stacks');
    }
};
