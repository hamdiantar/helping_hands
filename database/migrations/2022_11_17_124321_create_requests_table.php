<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('REQUEST', function (Blueprint $table) {
            $table->id('REQ_ID');
            $table->enum('REQ_TYPE', ['vol_joining_request ', 'entity_joining_request', 'opp_posting_request']);
            $table->date('REQ_DATE')->default(now());
            $table->time('REQ_TIME')->default(now());
            $table->enum('REQ_STATUS', ['pending ', 'accept', 'reject'])->default('pending');
            $table->text('REQ_DESCRIPTION');
            $table->unsignedBigInteger('ADMIN_ID')->nullable();
            $table->unsignedBigInteger('VOL_ENTITY_ID')->nullable();
            $table->unsignedBigInteger('VOL_ID')->nullable();
            $table->unsignedBigInteger('OPP_ID')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('REQUEST');
    }
}
