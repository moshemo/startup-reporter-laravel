<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->timestamps();

          $table->string('title');
          $table->string('slug')->nullable();

          $table->text('excerpt')->nullable();
          $table->text('body')->nullable();

          $table->string('article_url')->nullable();
          // $table->string('category')->nullable();
          $table->string('img_url')->nullable();
          $table->string('keywords')->nullable();
          // $table->string('source')->nullable();

          $table->date('date_published')->nullable();



          // Foreign
          $table->unsignedBigInteger('author_id');
          $table->foreign('author_id')
            ->references('id')
            ->on('authors')
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
        Schema::dropIfExists('news');
    }
}
