<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('FEEDBACK', function (Blueprint $table) {
            $table->id('FEED_ID');
            $table->date('FEED_DATE');

            $table->text('FEED_VOL_COMMENT')->nullable();
            $table->integer('FEED_VOL_RATE')->default(0);

            $table->text('FEED_ENT_COMMENT')->nullable();
            $table->integer('FEED_ENT_RATE')->default(0);

            $table->integer('FEED_OPP_RATE')->default(0);

            $table->unsignedBigInteger('VOL_ENTITY_ID')->nullable();
            $table->unsignedBigInteger('VOL_ID')->nullable();
            $table->unsignedBigInteger('OPP_ID')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('FEEDBACK');
    }
}
