<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVanbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vanban', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sovb');
            $table->string('name');
            $table->string('limit_name');            
            $table->string('slug')->unique();
            $table->string('url');
            $table->date('ngay_ban_hanh');
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
        Schema::dropIfExists('vanban');
    }
}
