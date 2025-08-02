<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::disableForeignKeyConstraints();

    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->unsignedBigInteger('category_id');
        $table->decimal('price', 12, 2);
        $table->integer('stock');
        $table->string('image')->nullable();
        $table->timestamps();

        $table->foreign('category_id')
              ->references('id')
              ->on('categories')
              ->onDelete('cascade');
    });

    Schema::enableForeignKeyConstraints();
}


    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
