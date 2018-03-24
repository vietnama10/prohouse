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
            $table->string('sku','50')->unique();
            $table->string('url_key', '100')->unique();
            $table->string('name');
            $table->string('short_description', '150')->default('');
            $table->string('description', '800');
            $table->float('price');
            $table->string('unit');
            $table->float('size');
            $table->integer('level');
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->integer('status');
            $table->string('direction');
            $table->string('location', '500');
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
