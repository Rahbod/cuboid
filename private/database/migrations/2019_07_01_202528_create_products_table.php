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
            $table->integer('author_id')->unsigned()->index()->nullable();
            $table->foreign('author_id')->references('id')->on('users')->onDelete('set null');
            $table->integer('category_id')->unsigned()->index()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->integer('gallery_id')->unsigned()->index()->nullable();
            $table->foreign('gallery_id')->references('id')->on('galleries')->onDelete('set null');
            $table->string('type');
            $table->string('title');
            $table->string('sub_title')->nullable();
            $table->string('summary')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->mediumText('attributes')->nullable();
            $table->integer('order');
            $table->tinyInteger('status')->defaule(1);
            $table->timestamp('published_at')->nullable();
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
        Schema::table('products', function (Blueprint $table){
            $table->dropForeign(['author_id']);
            $table->dropForeign(['category_id']);
            $table->dropForeign(['gallery_id']);
        });
        Schema::dropIfExists('products');
    }
}
