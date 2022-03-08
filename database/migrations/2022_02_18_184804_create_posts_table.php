<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_posts', function (Blueprint $table) {
            $table->id('ts_seq');
            $table->bigInteger('user_id');
            $table->enum('ts_type',['W','E'])->default('W')->comment('W->works, E->exhibitions');
            $table->string('ts_title',45)->comment('제목');
            $table->string('ts_title_seo')->comment('seo-slug제목');
            $table->string('ts_subtitle',45)->comment('부제목');
            $table->text('ts_desc')->comment('설명글');
            $table->tinyInteger('ts_order')->default(0)->comment('순서');
            $table->boolean('ts_is_show')->default(true);
            $table->boolean('ts_nav_is_show')->default(true)->comment('메뉴gnb 노출 여부');
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
        Schema::dropIfExists('tbl_posts');
    }
}

