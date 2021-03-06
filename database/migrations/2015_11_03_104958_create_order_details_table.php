<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items',function(Blueprint $table){
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('order_id')->unsigned();
			$table->integer('product_id');
			$table->integer('quantity');
			$table->decimal('price',10,2);
			$table->string('sku');
			$table->string('name');
			$table->string('slug')->nullable();
			$table->string('brand_id');
			$table->boolean('is_featured')->default(0);
			$table->string('banner')->nullable();
			$table->boolean('is_active')->default(1);
			$table->integer('mixability')->nullable();
			$table->string('tf_title')->nullable();
			$table->string('tf_text')->nullable();
			$table->string('tf_image')->nullable();
			$table->boolean('tf_reviews_enabled')->nullable();
			$table->integer('vfm_score')->nullable();
			$table->string('vfm_text')->nullable();
			$table->string('hiw_ingredients')->nullable();
			$table->integer('hiw_active_ingredient_count')->nullable();
			$table->longtext('hiw_text')->nullable();
			$table->string('benefit_1')->nullable();
			$table->string('benefit_2')->nullable();
			$table->string('benefit_3')->nullable();
			
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
        Schema::drop('order_items');
    }
}
