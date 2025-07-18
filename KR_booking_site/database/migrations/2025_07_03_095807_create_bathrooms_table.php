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
        Schema::create('bathrooms', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->text('facilities')->nullable(); // Example: "Shower, Hairdryer, Towels"
            $table->timestamps(); // created_at, updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bathrooms');
    }
};
