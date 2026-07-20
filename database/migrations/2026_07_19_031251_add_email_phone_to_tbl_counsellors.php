<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmailPhoneToTblCounsellors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_counsellors', function (Blueprint $table) {
            $table->string('email', 255)->nullable()->after('counsellor_qualification');
            $table->string('phone', 30)->nullable()->after('email');
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
            $table->dropColumn(['email', 'phone']);
        });
    }
}
