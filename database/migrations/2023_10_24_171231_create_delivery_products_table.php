<?php

use App\Models\DeliveryProduct;
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
        Schema::create('delivery_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('status')->default(DeliveryProduct::SUCCESS);
            $table->unsignedTinyInteger('user_id')->index()->comment('Połączenie z użytkownikiem')->constrained('users');
            $table->unsignedTinyInteger('delivery_id')->index()->comment('Połączenie z zamówieniem')->constrained('deliveries');
            $table->unsignedTinyInteger('product_id')->index()->comment('Połączenie z produktem')->constrained('products');
            $table->unsignedSmallInteger('count')->index();
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_products');
    }
};
