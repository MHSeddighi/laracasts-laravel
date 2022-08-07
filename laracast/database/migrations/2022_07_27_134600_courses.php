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
        schema::create('courses',function(Blueprint $table){
           $table->id();
           $table->dateTime('length');
           $table->string('title')->unique();
           $table->integer('lessons');
           $table->string('description')->nullable();
           $table->string('difficulty');
           $table->string('category');
           $table->integer('views')->default(0);
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
