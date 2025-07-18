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
        Schema::create('status', function (Blueprint $table) {
            $table->id(); // Primary key: id (auto-increment)
            $table->string('status'); // You can change to enum if needed
            $table->timestamps(); // Optional: created_at and updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('status');
    }
};
