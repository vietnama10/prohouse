<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('sku');
            $table->string('name');
            $table->string('description');
            $table->float('price');
            $table->string('size');
            $table->string('level');
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('status');
            $table->string('direction');
            $table->string('location');
            $table->string('address');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')
                ->references('id')->on('types')
                ->onDelete('cascade');
            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')
                ->references('id')->on('projects')
                ->onDelete('cascade');
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
}
