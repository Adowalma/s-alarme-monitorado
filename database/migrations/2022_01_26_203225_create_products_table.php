<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('descricao')->nullable();
            $table->string('product_key',16)->unique();
            $table->timestamps();
        });

        // create product_key random
        $existing_products = Product::where('product_key', '')->get();

        foreach($existing_products as $products)
        {
            $products->product_key = str_random(16);
            $products->save();                
        }
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
}
