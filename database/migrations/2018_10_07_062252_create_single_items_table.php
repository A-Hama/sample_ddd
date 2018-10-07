<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSingleItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('single_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('itemId');
            $table->integer('colorId');
            $table->integer('sizeId');
            $table->string('name');
            $table->string('single_item_description');
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
        Schema::dropIfExists('single_items');
    }
}
