<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsActiveQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('questions', 'is_active')) {
            Schema::table('questions', function (Blueprint $table) {
                $table->dropColumn('is_active');
            });
        }
        Schema::table('questions', function (Blueprint $table) {
            $table->boolean('is_active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('questions', 'is_active')) {
            Schema::table('questions', function (Blueprint $table) {
                $table->dropColumn('is_active');
            });
        }
    }
}
