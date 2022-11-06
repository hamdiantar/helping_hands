<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OPP_TASK', function (Blueprint $table) {
            $table->id('OPP_TASK_ID');
            $table->string('OPP_TASK_NAME');
            $table->text('OPP_TASK_DESCRIPTION');
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
        Schema::dropIfExists('OPP_TASK');
    }
}
