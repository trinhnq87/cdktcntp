c<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lienhe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('lienhe', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('ho_va_ten');
            $table->string('sdt');
            $table->text('noi_dung');
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
        //
    }
}
