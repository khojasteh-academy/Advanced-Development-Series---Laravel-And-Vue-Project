<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->id();
            $table->unsignedBigInteger('author_id');
            $table->string('post_title')->nullable();
            $table->longText('post_body')->nullable();
            $table->longText('post_short_desc')->nullable();
            $table->enum('post_format',['nav', 'aggregate','youtube','gallery','standard'])->nullable();
            $table->unsignedBigInteger('post_parent')->default(0);
            $table->string('post_type');
            $table->tinyInteger('post_status')->default(1);
            $table->timestamp('post_publish_date');
            $table->integer('views')->default(0);
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
