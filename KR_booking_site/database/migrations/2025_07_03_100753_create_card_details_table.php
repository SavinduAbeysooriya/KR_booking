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
        Schema::create('card_details', function (Blueprint $table) {
            $table->id(); // Primary Key

            $table->unsignedBigInteger('user_id'); // FK to users table

            $table->string('card_number');
            $table->string('expire_date'); // e.g., MM/YY or full date format
            $table->string('cvc');

            $table->timestamps();

            // Foreign Key Constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('card_details');
    }
};
