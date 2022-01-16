<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsernameOrgIdJobDescToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name', 'first_name');
            $table->string('last_name')->after('first_name');
            $table->string('username')->after('last_name')->unique();
            $table->bigInteger('organisation_id')->after('email')->nullable();
            $table->string('job_desc')->after('organisation_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('lastName');
            $table->dropColumn('username');
            $table->dropColumn('organisation_id');
            $table->dropColumn('job_desc');
        });
    }
}
