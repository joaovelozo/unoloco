<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title', 250)->unique();
            $table->text('description');
            $table->string('url', 100)->unique();
            $table->string('image', 250)->nullable();
            $table->date('date')->nullable();
            $table->time('hour')->nullable();
            $table->boolean('featured')->default(false);
            $table->string('slug');
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
        Schema::dropIfExists('posts');
    }
}
