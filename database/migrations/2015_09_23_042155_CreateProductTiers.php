<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTiers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tiers', function (Blueprint $table) {
        $table->increments('id');
        $table->string('ref');
        $table->string('type');
        $table->string('name');
        $table->string('banner')->nullable();
        $table->string('se_title')->nullable();
        $table->string('se_description')->nullable();
        $table->string('url_slug')->nullable();            
        $table->timestamps();
      });
      Schema::create('tier_descriptions', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('tier_id');
        $table->string('title');
        $table->longtext('content');
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
        Schema::drop('tiers');
        Schema::drop('tier_descriptions');
    }
}
