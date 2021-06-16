<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Khachhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Khachhang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenkhachhang');
            $table->string('sdt');
            $table->string('diachi');
            $table->string('email');
            $table->integer('taikhoan');            
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
        Schema::dropIfExists('Khachhang');
    }
}
