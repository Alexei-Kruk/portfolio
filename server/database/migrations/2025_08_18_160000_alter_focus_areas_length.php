<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('focus_areas', function (Blueprint $table) {
            $table->string('focus_areas', 1000)->change();
        });
    }

    public function down(): void
    {
        Schema::table('focus_areas', function (Blueprint $table) {
            $table->string('focus_areas', 255)->change();
        });
    }
};
