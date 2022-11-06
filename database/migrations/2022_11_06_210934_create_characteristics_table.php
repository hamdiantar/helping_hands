<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacteristicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('VOL_CHARACTERISTIC', function (Blueprint $table) {
            $table->id('VOL_CH_ID');
            $table->string('VOL_CH_NAME');
            $table->text('VOL_CH_DESCRIPTION');
            $table->unsignedBigInteger('OPP_ID');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('VOL_CHARACTERISTIC');
    }
}
