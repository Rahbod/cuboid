<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id')->unsigned()->index()->nullable();
            $table->foreign('author_id')->references('id')->on('users')->onDelete('set null');
            $table->integer('parent_id')->unsigned()->index()->nullable();
            $table->foreign('parent_id')->references('id')->on('slider_groups')->onDelete('set null');
            $table->string('name');
            $table->string('special_name')->nullable();
            $table->text('description')->nullable();
            $table->integer('order');
            $table->tinyInteger('status')->defaule(0);
            $table->integer('_lft')->nullable();
            $table->integer('_rgt')->nullable();
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
        Schema::table('slider_groups', function (Blueprint $table){
            $table->dropForeign(['author_id']);
            $table->dropForeign(['parent_id']);
        });
        Schema::dropIfExists('slider_groups');
    }
}
