<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('user') && Schema::hasColumn('user', 'password')) {
            DB::statement('ALTER TABLE user MODIFY password VARCHAR(255) NOT NULL');
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('user') && Schema::hasColumn('user', 'password')) {
            DB::statement('ALTER TABLE user MODIFY password VARCHAR(32) NOT NULL');
        }
    }
};
