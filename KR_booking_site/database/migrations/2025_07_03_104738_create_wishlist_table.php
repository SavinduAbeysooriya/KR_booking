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
        Schema::create('wishlist', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->unsignedBigInteger('user_id')->nullable(); // Foreign Key to users table
            $table->unsignedBigInteger('property_id')->nullable(); // Foreign Key to properties table
            $table->timestamps(); // created_at and updated_at

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');

            // Optional: Prevent duplicate wishlist entries
            $table->unique(['user_id', 'property_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('wishlist');
    }
};
