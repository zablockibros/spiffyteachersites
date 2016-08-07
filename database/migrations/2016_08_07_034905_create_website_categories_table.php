<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsiteCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_website', function (Blueprint $table) {
            $table->integer('category_id')->unsigned()->nullable()->default(null);
            $table->integer('website_id')->unsigned()->nullable()->default(null);
            $table->string('type')->nullable()->default(null);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('website_id')->references('id')->on('websites')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('category_website');
    }
}
