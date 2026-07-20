<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class MakeCounsellorSocialLinksNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Social links & photo are optional — allow NULL and widen to fit real URLs/paths.
        DB::statement("ALTER TABLE tbl_counsellors MODIFY insta_link VARCHAR(255) NULL");
        DB::statement("ALTER TABLE tbl_counsellors MODIFY fb_link VARCHAR(255) NULL");
        DB::statement("ALTER TABLE tbl_counsellors MODIFY twitter_link VARCHAR(255) NULL");
        DB::statement("ALTER TABLE tbl_counsellors MODIFY photo VARCHAR(255) NULL");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("ALTER TABLE tbl_counsellors MODIFY insta_link VARCHAR(30) NOT NULL");
        DB::statement("ALTER TABLE tbl_counsellors MODIFY fb_link VARCHAR(30) NOT NULL");
        DB::statement("ALTER TABLE tbl_counsellors MODIFY twitter_link VARCHAR(30) NOT NULL");
        DB::statement("ALTER TABLE tbl_counsellors MODIFY photo VARCHAR(100) NOT NULL");
    }
}
