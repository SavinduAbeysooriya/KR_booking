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
        Schema::create('amenities', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('amenity_type'); // FK to amenity_types table
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('amenity_type')->references('id')->on('amenity_types')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('amenities');
    }
};
