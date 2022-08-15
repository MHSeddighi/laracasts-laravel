<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses',function(Blueprint $table){
           $table->id();
           $table->timestamps();
           $table->dateTime('period-of-time');
           $table->string('title')->unique();
           $table->text('description');
           $table->string('difficulty');
           $table->string('category');
           $table->integer('views')->default(0);
           $table->unsignedBigInteger('image_id');
           $table->foreign('image_id')->references('id')->on('images')
                ->onDelete('cascade')
                ->onUpdate('cascade');

           $table->foreignId('tutor_id')->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('courses');
    }
};
