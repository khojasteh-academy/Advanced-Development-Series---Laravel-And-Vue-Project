<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_parent')->default(0);
            $table->unsignedBigInteger('link_parent')->default(0);
            $table->string('link_url')->nullable();
            $table->string('link_title')->nullable();
            $table->longText('link_image')->nullable();
            $table->string('link_icon')->nullable();
            $table->string('link_target')->nullable();
            $table->string('link_description')->nullable();
            $table->string('link_rel')->nullable();
            $table->integer('link_order');
            $table->tinyInteger('link_visible')->default(0);
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
        Schema::dropIfExists('links');
    }
}
