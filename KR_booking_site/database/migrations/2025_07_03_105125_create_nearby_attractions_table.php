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
        Schema::create('nearby_attractions', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->unsignedBigInteger('property_id'); // Foreign Key to properties table
            $table->string('attraction_name'); // Name of the attraction
            $table->string('type'); // Type (e.g., Park, Museum, Beach)
            $table->string('map_url')->nullable(); // Google Maps or external link
            $table->text('images')->nullable(); // Could store JSON array of image paths or URLs
            $table->string('avarage_visit_duration')->nullable(); // e.g., "1-2 hours"
            $table->text('description')->nullable(); // Description of the attraction
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
        Schema::dropIfExists('nearby_attractions');
    }
};
