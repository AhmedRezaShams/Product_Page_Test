<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
           // database/migrations/xxxx_xx_xx_create_products_table.php

Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('subtitle')->nullable();
    $table->text('description');
    $table->json('images'); // Store image URLs as JSON
    $table->decimal('price', 10, 2);
    $table->json('details'); // Store product details in JSON
    $table->json('benefits')->nullable(); // Store benefits in JSON
    $table->timestamps();
});

// database/migrations/xxxx_xx_xx_create_carts_table.php

Schema::create('carts', function (Blueprint $table) {
    $table->id();
    $table->foreignId('product_id')->constrained('products');
    $table->integer('quantity');
    $table->string('color');
    $table->string('size');
    $table->decimal('price', 10, 2);
    $table->timestamps();
});

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
