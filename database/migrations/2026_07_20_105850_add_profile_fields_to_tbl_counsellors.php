<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileFieldsToTblCounsellors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_counsellors', function (Blueprint $table) {
            $table->string('designation', 100)->nullable()->after('counsellor_qualification');
            $table->text('bio')->nullable()->after('designation');
            $table->string('google_link', 255)->nullable()->after('twitter_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_counsellors', function (Blueprint $table) {
            $table->dropColumn(['designation', 'bio', 'google_link']);
        });
    }
}
