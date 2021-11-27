<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('organisation_id');
            $table->string('name', 100)->default('');
            $table->string('desc', 255)->default('');
            $table->string('address', 255)->default('');
            $table->string('city', 100)->default('');
            $table->bigInteger('country_id')->nullable();
            $table->string('post_code')->default('');
            $table->string('building_type', 100)->default(''); // SHARED..
            $table->string('office_type', 100)->default(''); // SHARED, OPEN_PLANNED..
            $table->string('accessibility', 255)->default(''); // RAMP, LIFT..
            $table->bigInteger('created_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offices');
    }
}
