<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('stacks', function (Blueprint $table) {
            $table->unsignedBigInteger('experience_id')->nullable()->after('id');
            $table->foreign('experience_id')->references('id')->on('experiences')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('stacks', function (Blueprint $table) {
            $table->dropForeign(['experience_id']);
            $table->dropColumn('experience_id');
        });
    }
};
