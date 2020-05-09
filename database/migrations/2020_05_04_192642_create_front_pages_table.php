<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('front_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->string('slug');
            $table->string('header_img');
            $table->string('link_url');
            $table->tinyInteger('status')->default('1');
            $table->string('author');
            $table->longText('seo_description');
            $table->string('keywords');
            $table->string('og_title');
            $table->longText('og_description');
            $table->string('og_type');
            $table->string('og_url');
            $table->string('og_image');
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
        Schema::dropIfExists('front_pages');
    }
}
