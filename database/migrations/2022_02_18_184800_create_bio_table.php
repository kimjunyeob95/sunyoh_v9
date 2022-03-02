<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_bio', function (Blueprint $table) {
            $table->id('tb_seq');
            $table->string('tb_title',45)->comment('제목');
            $table->string('tb_img')->comment('이미지 url');
            $table->text('tb_desc')->comment('내용');
            $table->boolean('tb_is_show')->default(true);
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
        Schema::dropIfExists('tbl_bio');
    }
}
