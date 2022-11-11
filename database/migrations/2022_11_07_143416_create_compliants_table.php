<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompliantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('COMPLIANT', function (Blueprint $table) {
            $table->id('COMP_ID');
            $table->string('COMP_TITLE');
            $table->string('COMP_DESCRIPTION');
            $table->string('COMP_AGAINST');
            $table->date('COMP_DATE');
            $table->text('COMP_REPLY');
            $table->enum('COMP_STATUS', ['pending', 'replied'])->default('pending');
            $table->unsignedBigInteger('VOL_ENTITY_ID');
            $table->unsignedBigInteger('VOL_ID');
            $table->unsignedBigInteger('ADMIN_ID')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('COMPLIANT');
    }
}
