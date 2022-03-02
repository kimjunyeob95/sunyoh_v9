<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_main_banner', function (Blueprint $table) {
            $table->id('tm_seq');
            $table->tinyInteger('tm_order')->default(0)->comment('순서');
            $table->string('tm_img')->comment('이미지 url');
            $table->string('tm_img_m')->comment('이미지 url mobile');
            $table->boolean('tm_is_show',1)->default(true);
            $table->boolean('tm_is_del')->default(false);
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
        Schema::dropIfExists('tbl_main_banner');
    }
}
