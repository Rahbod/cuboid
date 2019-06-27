<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id')->unsigned()->index()->nullable();
            $table->foreign('author_id')->references('id')->on('users')->onDelete('set null');
            $table->integer('gallery_id')->unsigned()->index()->nullable();
            $table->foreign('gallery_id')->references('id')->on('galleries')->onDelete('set null');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('logo')->nullable();
            $table->integer('order');
            $table->tinyInteger('status')->defaule(1);
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
        Schema::table('gallery_items', function (Blueprint $table){
            $table->dropForeign(['author_id']);
            $table->dropForeign(['gallery_id']);
        });
        Schema::dropIfExists('gallery_items');
    }
}
