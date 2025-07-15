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
        Schema::create('user_searches', function (Blueprint $table) {
            $table->id(); // Id (Primary Key)
            $table->unsignedBigInteger('property_id'); // Foreign Key to properties table
            $table->unsignedBigInteger('user_id'); // Foreign Key to users table
            $table->timestamps(); // created_at and updated_at

            // Foreign key constraints
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('user_searches');
    }
};
