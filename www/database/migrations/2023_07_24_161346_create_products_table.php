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
            $table->string('product_title',20);
            $table->string('product_name',25);
            $table->string('product_description',150);
            $table->int('menthol',15);
            $table->int('sweet',15);
            $table->int('citric',15);
            $table->string("available_in_gm",40);
            $table->string('product_image',100);
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
