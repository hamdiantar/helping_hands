<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PAYMENT', function (Blueprint $table) {
            $table->id('PMT_ID');
            $table->text('PMT_DESCRPTION')->nullable();
            $table->date('PMT_DATE')->default(now());
            $table->integer('PMT_AMOUNT');
            $table->integer('PMT_TAX_PERCENTAGE')->nullable();
            $table->unsignedBigInteger('SUB_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PAYMENT');
    }
}
