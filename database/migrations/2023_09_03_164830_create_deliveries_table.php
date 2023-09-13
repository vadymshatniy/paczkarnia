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
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('tel')->index();
            $table->date('date');
            $table->time('time');
            $table->string('address');
            $table->text('message')->nullable();
            $table->unsignedInteger('american_number')->nullable();
            $table->unsignedInteger('chocolate_number')->nullable();
            $table->unsignedInteger('pumpkin_number')->nullable();
            $table->unsignedInteger('spanish_number')->nullable();
            $table->unsignedInteger('mini_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deliveries');
    }
};
