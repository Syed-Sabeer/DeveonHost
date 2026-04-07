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
        Schema::create('hosting_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hosting_id')->constrained('hostings')->cascadeOnDelete();
            $table->string('title');
            $table->string('badge')->nullable();
            $table->text('description');
            $table->decimal('amount_per_month', 10, 2);
            $table->decimal('discount_percentage_annual', 5, 2)->nullable();
            $table->json('features');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hosting_plans');
    }
};
