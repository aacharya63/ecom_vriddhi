<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageCollapseDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_collapse_data', function (Blueprint $table) {
            $table->id();
            $table->integer('pageId');
            $table->string('title');
            $table->longText('description');
            $table->tinyInteger('status')->default('1');
            
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
        Schema::dropIfExists('page_collapse_data');
    }
}
