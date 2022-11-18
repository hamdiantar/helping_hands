<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SUBSCRIBTION', function (Blueprint $table) {
            $table->id('SUB_ID');
            $table->date('SUB_DATE')->default(now());
            $table->unsignedBigInteger('VOL_ENTITY_ID');
            $table->unsignedBigInteger('PACKAGE_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SUBSCRIBTION');
    }
}
