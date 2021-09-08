<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHssvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hssv', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma_lop',20)->unique();
            $table->string('khoa',50);
            $table->string('nganh_nghe_dtao',60);
            $table->string('khoa_hoc',12);
            $table->text('url');
            $table->tinyInteger('user_id');
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
        Schema::dropIfExists('hssv');
    }
}
