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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id(); // Primary Key

            // Foreign Keys
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->unsignedBigInteger('property_id');
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('vendor_id');

            // Booking Details
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->integer('number_of_guests')->default(1);
            $table->text('special_requests')->nullable();
            $table->decimal('total_price', 10, 2);
            $table->date('booking_date')->useCurrent();
            $table->string('status')->nullable();
            $table->string('payment_status')->nullable();

            // Guest Info
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('country');
            $table->string('phone_number');

            // Confirmation
            $table->string('confirmation_code')->nullable();
            $table->string('pin')->nullable();
            $table->string('full_guest_name')->nullable();
            $table->string('estimated_arrived_time')->nullable();

            $table->timestamps();

            // Foreign Key Constraints
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            $table->foreign('room_id')->references('id')->on('rooms_apartments_suites')->onDelete('cascade');
            $table->foreign('vendor_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
