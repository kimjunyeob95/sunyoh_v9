<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCvListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_cv_list', function (Blueprint $table) {
            $table->id('tcvl_seq');
            $table->string('tcvl_year',20)->comment('년도');
            $table->text('tcvl_desc')->comment('내용');
            $table->tinyInteger('tcvl_order')->default(0)->comment('순서');
            $table->boolean('tcvl_is_show')->default(true);
            $table->unsignedBigInteger('tcv_seq');
            $table->foreign('tcv_seq')->references('tcv_seq')->on('tbl_cv');
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
        Schema::dropIfExists('tbl_cv_list');
    }
}
