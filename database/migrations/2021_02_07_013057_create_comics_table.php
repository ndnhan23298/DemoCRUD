<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('cate_id')->references('id')->on('cates')->onDelete('cascade');
            // $table->foreignId('cate_id')->constrained('cates');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comics');
    }
}
