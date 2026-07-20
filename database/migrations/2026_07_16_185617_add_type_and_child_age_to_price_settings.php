<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeAndChildAgeToPriceSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_price_settings', function (Blueprint $table) {
            $table->string('candidate_type', 20)->default('Adult')->after('councellor_id');
            $table->unsignedTinyInteger('child_age_limit')->nullable()->after('candidate_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_price_settings', function (Blueprint $table) {
            $table->dropColumn(['candidate_type', 'child_age_limit']);
        });
    }
}
