<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->string('size_id');
            $table->string('colour');
            $table->string('title');
            $table->string('slug');
            $table->string('eng');
            $table->string('product_code');
            $table->integer('sell_price');
            $table->integer('discount');
            $table->integer('regular_price');
            $table->text('short_description');
            $table->text('long_description');
            $table->integer('availability');
            $table->string('meta_description')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->integer('status');
            $table->string('cover_photo');
            $table->string('others_photo_1');
            $table->string('others_photo_2');
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
        Schema::dropIfExists('product');
    }
}
