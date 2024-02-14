<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**GSU Interview
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
			$table->string('title');
            $table->string('body');
			$table->foreignId('user_id')->constrained();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**GSU Interview
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
title, body, publication date, and author