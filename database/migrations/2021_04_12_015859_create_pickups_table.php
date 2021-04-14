<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePickupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pickups', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('名前');
            $table->integer('auther_id')->nullable()->default(9999)->comment('著者ID');
            $table->integer('category_id')->nullable()->default(9999)->comment('カテゴリーID');
            $table->string('article_id')->nullable()->comment('記事ID');
            $table->integer('delete_flag')->comment('削除フラグ');
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
        Schema::dropIfExists('pickups');
    }
}
