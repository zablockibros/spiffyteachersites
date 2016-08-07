<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWebsiteFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('websites', function ($table) {
            $table->string('state')->nullable()->default(null);
            $table->string('pinterest', 255)->nullable()->default(null);
            $table->string('tpt', 255)->nullable()->default(null);
            $table->string('logoId')->nullable()->default(null);
            $table->string('logoUrl')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('websites', function ($table) {
            $table->dropField('state');
            $table->dropField('pinterest');
            $table->dropField('tpt');
            $table->dropField('logoId');
            $table->dropField('logoUrl');
        });
    }
}
