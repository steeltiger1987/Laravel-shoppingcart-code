<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductVariations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_variations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('name');
            $table->string('subsku');
            $table->decimal('price', 5, 2);
            $table->string('size')->nullable();
            $table->integer('flavor_id')->nullable();
            $table->decimal('rrp', 5, 2)->nullable();
            $table->integer('servings')->nullable();
            $table->boolean('cs')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('width')->nullable();
            $table->integer('length')->nullable();
            $table->integer('depth')->nullable();
            $table->boolean('is_active')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_variations');
    }
}
