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
        Schema::table('hostings', function (Blueprint $table) {
            if (! Schema::hasColumn('hostings', 'is_active')) {
                $table->boolean('is_active')->default(true)->after('slug');
            }
        });

        Schema::table('hosting_plans', function (Blueprint $table) {
            if (! Schema::hasColumn('hosting_plans', 'is_active')) {
                $table->boolean('is_active')->default(true)->after('features');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hostings', function (Blueprint $table) {
            if (Schema::hasColumn('hostings', 'is_active')) {
                $table->dropColumn('is_active');
            }
        });

        Schema::table('hosting_plans', function (Blueprint $table) {
            if (Schema::hasColumn('hosting_plans', 'is_active')) {
                $table->dropColumn('is_active');
            }
        });
    }
};
