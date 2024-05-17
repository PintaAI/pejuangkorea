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
        Schema::create('zooms', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->text('category')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('mentor_id')->nullable()->cascadeOnDelete();
            $table->integer('price')->nullable();
            $table->integer('duration')->nullable();
            $table->enum('level', ['beginner', 'intermediate', 'advanced'])->nullable()->default('beginner');
            $table->boolean('published')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zooms');
    }
};
