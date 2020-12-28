<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('名前');
            $table->string('email')->nullable()->comment('アドレス');
            $table->string('password')->nullable()->comment('パスワード');
            $table->string('favorite_admin')->nullable()->comment('お気に入り投稿者');
            $table->string('favorite_category')->nullable()->comment('お気に入りカテゴリー');
            $table->string('favorite_tag')->nullable()->comment('お気に入りタグ');
            $table->integer('status')->comment('公開状態'); 
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
        Schema::dropIfExists('members');
    }
}
