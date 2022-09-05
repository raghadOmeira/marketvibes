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
        Schema::create('tbl_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name');
            $table->BigInteger('category_id')->unsigned();
            $table->BigInteger('tag_id')->unsigned();
            $table->text('product_size');
            $table->text('description');
            $table->text('product_price');
            $table->string('product_image');
            $table->string('product_color');
            $table->string('publication_status');
            $table->foreign('category_id')->references('id')->on('tbl_categories');
            $table->foreign('tag_id')->references('id')->on('tbl_tags');
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
        Schema::dropIfExists('products');
    }
};
