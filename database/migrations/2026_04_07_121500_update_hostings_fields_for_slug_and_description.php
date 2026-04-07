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
        if (!Schema::hasTable('hostings')) {
            return;
        }

        Schema::table('hostings', function (Blueprint $table) {
            if (Schema::hasColumn('hostings', 'image')) {
                $table->dropColumn('image');
            }

            if (!Schema::hasColumn('hostings', 'description')) {
                $table->text('description')->nullable()->after('title');
            }

            if (!Schema::hasColumn('hostings', 'slug')) {
                $table->string('slug')->nullable()->after('description');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (!Schema::hasTable('hostings')) {
            return;
        }

        Schema::table('hostings', function (Blueprint $table) {
            if (Schema::hasColumn('hostings', 'slug')) {
                $table->dropColumn('slug');
            }

            if (Schema::hasColumn('hostings', 'description')) {
                $table->dropColumn('description');
            }

            if (!Schema::hasColumn('hostings', 'image')) {
                $table->string('image')->nullable()->after('title');
            }
        });
    }
};
