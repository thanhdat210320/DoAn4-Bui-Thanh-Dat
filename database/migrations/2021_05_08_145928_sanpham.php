<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tensanpham');
            $table->integer('giatien');
            $table->integer('gianhap');
            $table->integer('soluong');
            $table->string('anh');
            $table->string('nhacungcap');
            $table->string('mota');
            $table->timestamps();
            $table->integer('cate_id')->unsigned();
            $table->foreign('cate_id')
            ->references('id')
            ->on('loaisanpham')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
