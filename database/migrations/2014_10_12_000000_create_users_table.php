<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('VOLUNTEER', function (Blueprint $table) {
            $table->id('VOL_ID');
            $table->string('VOL_USERNAME');
            $table->string('password');
            $table->string('VOL_FNAME');
            $table->string('VOL_LNAME');
            $table->string('VOL_EMAIL')->unique();
            $table->string('VOL_PHONE');
            $table->string('VOL_NATIONAL_ID');
            $table->string('VOL_SCHOOL_NAME');
            $table->string('VOL_GRADE_LEVEL');
            $table->string('VOL_CITY');
            $table->integer('VOL_TARGET_HOUR')->default(0);
            $table->integer('VOL_COMPLETED_HOUR')->default(0);
            $table->enum('VOL_GENDER', ['male', 'female']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('VOLUNTEER');
    }
}
