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
        Schema::create('conversations', function (Blueprint $table) {
            $table->id(); // Primary Key

            $table->unsignedBigInteger('customer_id')->nullable(); // FK to customers
            $table->unsignedBigInteger('vendor_id')->nullable();   // FK to vendors
            $table->unsignedBigInteger('admin_id')->nullable();    // FK to admins
            $table->unsignedBigInteger('booking_id')->nullable();  // FK to bookings
            $table->unsignedBigInteger('message_created_user_id')->nullable(); // FK to users table

            $table->text('message')->nullable(); // Message content
            $table->string('status')->nullable();
            $table->date('date'); // Date of the message
            $table->time('time'); // Time of the message
            $table->string('image_or_doc_path')->nullable(); // Optional file path

            $table->timestamps(); // created_at and updated_at

            // Foreign key constraints
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('vendor_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('admin_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('set null');
            $table->foreign('message_created_user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('conversations');
    }
};
