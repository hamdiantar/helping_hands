<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OPPORTUNITY', function (Blueprint $table) {
            $table->id('OPP_ID');
            $table->string('OPP_NAME');
            $table->text('OPP_DESCRIPTION');
            $table->date('OPP_START_DATE');
            $table->date('OPP_FINISH_DATE');
            $table->time('OPP_START_TIME');
            $table->time('OPP_END_TIME');
            $table->integer('OPP_TOTAL_HOUR');
            $table->string('OPP_CITY');
            $table->string('OPP_LOCATION');
            $table->integer('OPP_CAPACITY');
            $table->integer('OPP_STATUS');
            $table->unsignedBigInteger('ADMIN_ID')->nullable();
            $table->unsignedBigInteger('VOL_ENTITY_ID');
        });
    }

    public function down()
    {
        Schema::dropIfExists('OPPORTUNITY');
    }
}
