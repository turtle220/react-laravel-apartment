<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('SlideImage1');
            $table->string('SlideImage2');
            $table->string('SlideImage3');
            $table->string('TestimonialImage1');
            $table->string('TestimonialImage2');
            $table->string('TestimonialImage3');
            $table->string('TestimonialClient1');
            $table->string('TestimonialClient2');
            $table->string('TestimonialClient3');
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
        Schema::dropIfExists('homes');
    }
}
