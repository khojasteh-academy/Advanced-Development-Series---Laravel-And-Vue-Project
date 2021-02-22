<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageLayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_layouts', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->tinyInteger('size')->nullable();
            $table->unsignedBigInteger('page_id');
            $table->unsignedBigInteger('parent_id')->default(0);
            $table->foreign('page_id')->references('id')->on('pages')->cascadeOnDelete();

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
        Schema::dropIfExists('page_layouts');
    }
}
