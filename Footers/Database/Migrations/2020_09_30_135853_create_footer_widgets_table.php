<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFooterWidgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_widgets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('column_id');
            $table->string('name')->nullable();
            $table->string('type');
            $table->longText('content_data')->nullable();
            $table->unsignedBigInteger('content_id')->nullable();

            $table->foreign('column_id')->references('id')->on('footer_columns')->cascadeOnDelete();

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
        Schema::dropIfExists('footer_widgets');
    }
}
