<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('state',['0','1','2'])->default('0');
            $table->enum('nav',['0','1'])->default('0');
            $table->enum('home',['0','1'])->default('0');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->longText('descripcion');
            $table->unsignedBigInteger('user_id')->unsigned();

            //llaves foraneas
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('pages');
    }
}
