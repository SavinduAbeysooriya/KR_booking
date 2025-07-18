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
        Schema::create('transaction_history', function (Blueprint $table) {
            $table->id(); // Id (Primary Key)
            $table->unsignedBigInteger('user_id'); // Foreign Key to users table
            $table->date('date'); // date of transaction
            $table->decimal('amount', 15, 2); // amount with 2 decimals, adjust precision as needed
            $table->string('reason'); // reason for the transaction
            $table->enum('budget_or_expenditure', ['budget', 'expenditure']); // enum for budget or expenditure
            $table->timestamps(); // created_at and updated_at

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('transaction_history');
    }
};
