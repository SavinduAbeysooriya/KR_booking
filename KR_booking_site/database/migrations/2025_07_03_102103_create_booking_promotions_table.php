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
        Schema::create('booking_promotions', function (Blueprint $table) {
            $table->id(); // Id (Primary Key)
            $table->unsignedBigInteger('property_id'); // Foreign Key to properties table
            $table->unsignedBigInteger('room_id'); // Foreign Key to rooms table
            $table->decimal('discount_percentage', 5, 2)->nullable(); // Discount percentage (e.g., 15.50%)
            $table->decimal('discount_amount', 10, 2)->nullable(); // Discount amount (fixed)
            $table->string('discount_type'); // Discount type (e.g., percentage, amount)
            $table->date('start_date'); // Promotion start date
            $table->date('end_date'); // Promotion end date
            $table->integer('min_stay')->nullable(); // Minimum stay required for promotion
            $table->string('applicable_days')->nullable(); // Days of the week applicable (e.g., "Mon,Tue,Wed")
            $table->string('promotion_name'); // Name of the promotion
            $table->timestamps(); // created_at and updated_at

            // Foreign key constraints
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            $table->foreign('room_id')->references('id')->on('rooms_apartments_suites')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('booking_promotions');
    }
};
