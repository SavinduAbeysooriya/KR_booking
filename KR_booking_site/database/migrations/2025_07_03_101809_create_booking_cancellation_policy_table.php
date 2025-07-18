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
        Schema::create('booking_cancellation_policy', function (Blueprint $table) {
            $table->id(); // Id (Primary Key)
            $table->unsignedBigInteger('property_id'); // Foreign Key to properties table
            $table->text('description'); // Cancellation policy description
            $table->timestamps(); // created_at and updated_at

            // Foreign key constraint
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('booking_cancellation_policy');
    }
};
