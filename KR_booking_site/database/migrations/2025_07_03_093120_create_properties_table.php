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
        Schema::create('properties', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('owner_id'); // FK to users or owners
            $table->string('property_name');
            $table->text('description');
            $table->string('property_type');
            $table->integer('star_rating')->nullable(); // Can be 1-5
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('postal_code');
            $table->string('status')->nullable();
            $table->integer('reviews')->nullable();
            $table->json('images')->nullable(); // Store multiple images as JSON
            $table->decimal('price', 10, 2);
            $table->text('near_places')->nullable(); // Could be JSON or text
            $table->string('map_url')->nullable();
            $table->unsignedBigInteger('amenities')->nullable(); // FK to amenities table
            $table->string('description_title')->nullable();
            $table->boolean('availability')->nullable();
            $table->text('near_places_highlight')->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('amenities')->references('id')->on('amenities')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
