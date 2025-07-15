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
        Schema::create('rooms_apartments_suites', function (Blueprint $table) {
            $table->id(); // Primary key

            $table->unsignedBigInteger('property_id'); // FK to properties table
            $table->string('room_name')->nullable();
            $table->string('apartment_name')->nullable();
            $table->string('suite_name')->nullable();

            $table->text('description')->nullable();
            $table->integer('max_occupancy')->nullable();
            $table->boolean('availability')->nullable();
            $table->decimal('base_price', 10, 2);

            $table->json('images')->nullable(); // Store multiple images
            $table->string('room_size')->nullable();

            $table->unsignedBigInteger('room_amenities')->nullable(); // FK
            $table->unsignedBigInteger('bathroom')->nullable(); // FK

            $table->text('facilities')->nullable(); // JSON or text
            $table->text('view')->nullable();
            $table->text('furnitures')->nullable();
            $table->text('conditions')->nullable();

            $table->text('policies')->nullable();
            $table->text('inventory')->nullable();

            $table->timestamps();

            // Foreign key constraints
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            $table->foreign('room_amenities')->references('id')->on('amenities')->onDelete('set null');
            $table->foreign('bathroom')->references('id')->on('bathrooms')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rooms_apartments_suites');
    }
};

