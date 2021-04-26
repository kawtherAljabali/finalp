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
            $table->bigIncrements('id');
            $table->integer('subcatigory_id')->unsigned()->nullable()->index()->onDelete('cascade');
            $table->string('name');
            $table->string('quantity');
            $table->string('small_description');
            $table->integer('offer_price');
            $table->string('new_arrival_products');
            $table->string('priority');
            $table->text('desc');
            $table->integer('price');
            $table->text('image');
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
