<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Chitiethoadon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiethoadon', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('soluong');
            $table->integer('dongia');
            $table->timestamps();
            $table->integer('prod_id')->unsigned();
            $table->integer('oder_id')->unsigned();
            $table->foreign('prod_id')
            ->references('id')
            ->on('sanpham')
            ->onDelete('cascade');
            $table->foreign('oder_id')           
            ->references('id')
            ->on('hoadon')
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
        //
    }
}
