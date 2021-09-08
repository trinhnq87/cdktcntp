<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDangkysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dangkys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ho_va_ten');
            $table->string('sdt');
            $table->string('ngay_sinh');
            $table->string('dia_chi');
            $table->string('truong');
            $table->string('tong_ket');
            $table->string('nganh_nghe');
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
        Schema::dropIfExists('dangkys');
    }
}
