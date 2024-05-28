<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('blog_categories')->onDelete('cascade');
            $table->string('title');
            $table->text('content');
            $table->timestamps();
        });

        Schema::create('blog_categories', function (Blueprint $table) {
            $table->id(); // or $table->bigIncrements('id');
            // other columns...
        });
        
        Schema::table('blog_categories', function (Blueprint $table) {
            $table->index('id'); // Make sure id column is indexed
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
