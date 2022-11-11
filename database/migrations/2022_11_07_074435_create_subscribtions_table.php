<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscribtionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PACKAGE', function (Blueprint $table) {
            $table->id('PACKAGE_ID');
            $table->double('PACKAGE_PRICE');
            $table->integer('PACKAGE_DURATION');
            $table->date('PACKAGE_START_DATE');
            $table->date('PACKAGE_FINISH_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PACKAGE');
    }
}
