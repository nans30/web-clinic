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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('encounter_id')->constrained('encounters');
            $table->enum('status', ['pending', 'paid', 'cancelled']);
            $table->decimal('amount_paid', 10, 2);
            $table->timestamp('payment_date');
            $table->timestamps();
            $table->string('created_by')->nullable();
            $table->string('update_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};