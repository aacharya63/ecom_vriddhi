<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url');
            $table->string('slug');
            $table->longText('description');
            $table->string('image');
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
        Schema::dropIfExists('blogs');
    }
}
