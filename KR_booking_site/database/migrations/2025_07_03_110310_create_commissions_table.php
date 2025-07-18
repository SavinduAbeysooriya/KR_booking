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
        Schema::create('commissions', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->unsignedBigInteger('vendor_id'); // FK to vendors table
            $table->unsignedBigInteger('booking_id'); // FK to bookings table
            $table->unsignedBigInteger('admin_id'); // FK to admins table
            $table->decimal('commission_amount', 10, 2); // Commission amount
            $table->timestamps(); // created_at and updated_at

            // Foreign key constraints
            $table->foreign('vendor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
            $table->foreign('admin_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('commissions');
    }
};
