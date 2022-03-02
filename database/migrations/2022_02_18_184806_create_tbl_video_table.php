<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_videos', function (Blueprint $table) {
            $table->id('tv_seq');
            $table->enum('tv_type',['ALL','PC','MOBILE'])->default('ALL');
            $table->text('tv_url')->comment('비디오 경로');
            $table->string('tv_name',45)->comment('비디오 이름');
            $table->timestamps();
            $table->foreignId('ts_seq')->references('ts_seq')->on('tbl_posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_videos');
    }
}
