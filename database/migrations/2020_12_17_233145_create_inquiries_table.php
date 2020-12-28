<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('email')->comment('アドレス');
            $table->integer('member_id')->comment('会員ID'); 
            $table->string('title')->nullable()->comment('タイトル');
            $table->text('comment')->nullable()->comment('コメント');
            $table->integer('admin_id')->comment('返信希望者ID'); 
            $table->integer('category')->nullable()->comment(''); 
            $table->string('response_title')->nullable()->comment('返信タイトル');
            $table->text('response_comment')->nullable()->comment('返信コメント');
            $table->integer('status')->comment('返信状況'); 
            $table->integer("display_status")->comment('表示意思'); 
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
        Schema::dropIfExists('inquiries');
    }
}
