<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSessionDetailsToPayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->unsignedBigInteger('counsellor_id')->nullable()->after('amount');
            $table->string('candidate_type', 20)->nullable()->after('counsellor_id');
            $table->string('session_mode', 50)->nullable()->after('candidate_type');
            $table->string('session_date', 30)->nullable()->after('session_mode');
            $table->text('time_slots')->nullable()->after('session_date');
            $table->string('total_hour', 10)->nullable()->after('time_slots');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn(['counsellor_id', 'candidate_type', 'session_mode', 'session_date', 'time_slots', 'total_hour']);
        });
    }
}
