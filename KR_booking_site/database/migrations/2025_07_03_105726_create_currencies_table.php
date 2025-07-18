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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('currency_type'); // e.g., USD, LKR, EUR
            $table->string('symbol'); // e.g., $, Rs, €
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('currencies');
    }
};
