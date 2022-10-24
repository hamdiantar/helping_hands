<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ADMIN', function (Blueprint $table) {
            $table->id('ADMIN_ID');
            $table->string('ADMIN_USERNAME');
            $table->string('password');
            $table->string('ADMIN_FNAME');
            $table->string('ADMIN_LNAME');
            $table->string('ADMIN_PHONE')->nullable();
            $table->string('ADMIN_EMAIL');
            $table->string('ADMIN_POSITION')->nullable();
            $table->string('ADMIN_ROLE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ADMIN');
    }
}
