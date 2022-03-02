<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_images', function (Blueprint $table) {
            $table->id('ti_seq');
            $table->enum('ti_type',['ALL','PC','MOBILE'])->default('ALL');
            $table->text('ti_url')->comment('이미지 경로');
            $table->string('ti_name',45)->comment('이미지 제목');
            $table->string('ti_desc',255)->comment('이미지 설명');
            $table->foreignId('ts_seq')->references('ts_seq')->on('tbl_posts');
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
        Schema::dropIfExists('tbl_images');
    }
}
