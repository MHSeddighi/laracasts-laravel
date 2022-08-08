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
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->integer('number');
            $table->string('title');
            $table->string('description');
            $table->unsignedBigInteger('link_id')->nullable();
            $table->foreign('link_id')
                ->references('id')
                ->on('links')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('course_id')->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('video_id')->constrained()
                ->onUpdate('cascade')
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
        Schema::dropIfExists('episodes');
    }
};
