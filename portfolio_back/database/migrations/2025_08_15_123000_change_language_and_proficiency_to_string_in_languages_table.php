<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('languages', function (Blueprint $table) {
            $table->string('language')->change();
            $table->string('proficiency')->nullable()->change();
        });
    }

    public function down(): void
    {
        // В down можно вернуть типы обратно, если нужно (например, smallInteger)
        Schema::table('languages', function (Blueprint $table) {
            $table->smallInteger('language')->change();
            $table->smallInteger('proficiency')->nullable()->change();
        });
    }
};
