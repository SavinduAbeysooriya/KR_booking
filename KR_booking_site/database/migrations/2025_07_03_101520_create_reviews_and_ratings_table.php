<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reviews_and_ratings', function (Blueprint $table) {
            $table->id(); // Id (Primary Key)
            $table->unsignedBigInteger('property_id'); // Foreign Key to properties table
            $table->unsignedBigInteger('customer_id'); // Foreign Key to customers table
            $table->text('review_text'); // Review text
            $table->unsignedTinyInteger('rating'); // Rating (e.g., 1-5 stars)
            $table->date('date'); // Date of review
            $table->unsignedBigInteger('booking_id')->nullable(); // Booking ID, nullable if no booking linked
            $table->string('status')->nullable(); // Status (e.g., pending, approved)
            $table->timestamps(); // created_at and updated_at

            // Foreign key constraints
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('reviews_and_ratings');
    }
};
