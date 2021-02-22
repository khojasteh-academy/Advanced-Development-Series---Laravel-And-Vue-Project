<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_components', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('options');
            $table->unsignedBigInteger('layout_id');
            $table->foreign('layout_id')->references('id')->on('page_layouts')->cascadeOnDelete();

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
        Schema::dropIfExists('page_components');
    }
}
