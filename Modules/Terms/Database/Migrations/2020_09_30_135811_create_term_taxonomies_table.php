<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTermTaxonomiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('term_taxonomies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_term_id');
            $table->string('taxonomy_type');
            $table->string('taxonomy_description')->nullable();
            $table->unsignedBigInteger('parent');
            $table->integer('count')->default(0);
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
        Schema::dropIfExists('term_taxonomies');
    }
}
