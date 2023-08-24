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
            $table->string('variant_name');
            $table->string('category')->nullable();
            $table->string('url')->nullable();
            $table->string('image')->nullable();
            $table->text('description');
            $table->string('connection')->nullable();
            $table->string('material');
            $table->string('dn');
            $table->string('pn')->nullable();
            $table->string('closing_direction')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
