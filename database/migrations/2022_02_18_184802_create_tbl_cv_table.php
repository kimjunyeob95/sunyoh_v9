<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_cv', function (Blueprint $table) {
            $table->id('tcv_seq');
            $table->string('tcv_title',45)->comment('제목');
            $table->tinyInteger('tcv_order')->default(0)->comment('순서');
            $table->boolean('tcv_is_show')->default(true)->comment('T->노출,F->비노출');
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
        Schema::dropIfExists('tbl_cv');
    }
}
