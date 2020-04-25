<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeBeliveInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('we_belive_ins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('about');
            $table->string('wbi1');
            $table->string('wbi2');
            $table->string('wbi3');
            $table->string('wbi4');
            $table->string('wbi5');
            $table->string('wbi6');
            $table->string('mobile');
            $table->string('email');
            $table->string('address');
            $table->string('fb');
            $table->string('tw');
            $table->string('gl');
            $table->string('lin');
            $table->string('contact_image');
            $table->string('about_image');
            $table->string('product_image');
            $table->string('brand_image');
            $table->string('sister_image');
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
        Schema::dropIfExists('we_belive_ins');
    }
}
