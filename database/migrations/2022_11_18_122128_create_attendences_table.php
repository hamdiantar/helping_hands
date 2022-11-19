<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendencesTable extends Migration
{
    public function up()
    {
        Schema::create('ATTENDENCE', function (Blueprint $table) {
            $table->id('ATT_ID');
            $table->date('ATT_DATE');
            $table->enum('ATT_STATUS', ['absent', 'attend']);
            $table->unsignedBigInteger('OPP_ID');
            $table->unsignedBigInteger('VOL_ID');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ATTENDENCE');
    }
}
