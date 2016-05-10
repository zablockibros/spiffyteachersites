<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetQuestionsDefaults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questions', function ($table) {
            $table->integer('user_id')->nullable()->default(null)->change();
            $table->integer('category_id')->nullable()->default(null)->change();
            $table->text('answer')->nullable()->default(null)->change();
            $table->smallInteger('votes')->default(0)->change();
            $table->smallInteger('up_votes')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions', function ($table) {
            $table->integer('user_id')->nullable()->change();
            $table->integer('category_id')->nullable()->change();
            $table->text('answer')->change();
            $table->smallInteger('votes')->change();
            $table->smallInteger('up_votes')->change();
        });
    }
}
