<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CERTIFICATION', function (Blueprint $table) {
            $table->id('CER_ID');
            $table->date('CER_ISSUE_DATE');
            $table->string('CER_TYPE')->nullable();
            $table->unsignedBigInteger('VOL_ID');
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
        Schema::dropIfExists('CERTIFICATION');
    }
}
