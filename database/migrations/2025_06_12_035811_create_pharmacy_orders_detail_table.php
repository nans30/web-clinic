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
    {Schema::create('pharmacy_orders_detail', function (Blueprint $table) {
        $table->id();
        $table->foreignId('pharmacy_order_id')->constrained('pharmacy_orders');
        $table->foreignId('medicines_id')->constrained('medicines');
        $table->integer('quantity');
        $table->string('day');
        $table->time('duration');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pharmacy_orders_detail');
    }
};