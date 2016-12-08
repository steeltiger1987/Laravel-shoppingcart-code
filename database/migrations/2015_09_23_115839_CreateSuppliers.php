<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ref');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('product_suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('supplier_id');
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
        Schema::drop('suppliers');
        Schema::drop('product_suppliers');
    }
}
