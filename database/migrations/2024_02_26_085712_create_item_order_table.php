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
        Schema::create('item_order', function (Blueprint $table) {
            $table->id();

            $table->unsignedBiginteger('item_id');
            $table->unsignedBiginteger('order_id');

            $table->foreign('item_id')->references('id')
                 ->on('items')->onDelete('cascade');
            $table->foreign('order_id')->references('id')
                ->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_order');
    }
};
