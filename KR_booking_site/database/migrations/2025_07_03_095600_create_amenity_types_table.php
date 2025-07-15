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
        Schema::create('amenity_types', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('amenity_name');
            $table->string('icon')->nullable(); // e.g., path or icon class name
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('amenity_types');
    }
};
