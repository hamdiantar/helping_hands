<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolEntitiesTable extends Migration
{
    public function up()
    {
        Schema::create('VOLUNTEERING_ENTITY', function (Blueprint $table) {
            $table->id('VOL_ENTITY_ID');
            $table->string('VOL_ENTITY_USERNAME');
            $table->string('VOL_ENTITY_EMAIL')->unique();
            $table->string('password');
            $table->string('VOL_ENTITY_NAME');
            $table->string('VOL_ENTITY_CR_NO');
            $table->string('VOL_ENTITY_SECTOR');
            $table->string('VOL_ENTITY_LOGO');
            $table->boolean('VOL_ENTITY_STATUS')->default(false);

            $table->string('VOL_ENTITY_CREDIT_TYPE')->nullable();
            $table->string('VOL_ENTITY_CREDIT_NO')->nullable();
            $table->string('VOL_ENTITY_CREDIT_HOLDER_NAME')->nullable();
            $table->string('VOL_ENTITY_CREDIT_EXP_DATE')->nullable();
            $table->string('VOL_ENTITY_CREDIT_CVV')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('VOLUNTEERING_ENTITY');
    }
}
