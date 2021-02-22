<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFooterColumnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_columns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('footer_id');
            $table->tinyInteger('order');
            $table->string('name');

            $table->foreign('footer_id')->references('id')->on('footers')->cascadeOnDelete();


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
        Schema::dropIfExists('footer_columns');
    }
}
