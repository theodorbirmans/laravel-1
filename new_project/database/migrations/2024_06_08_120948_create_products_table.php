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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('desc');
            $table->string('SKU');
            $table->decimal('price', total: 2, places: 2);
            $table->foreignIdFor(App\Models\ProductCategory::class);
            $table->foreignIdFor(App\Models\ProductInventory::class);
            $table->foreignIdFor(App\Models\Discount::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
