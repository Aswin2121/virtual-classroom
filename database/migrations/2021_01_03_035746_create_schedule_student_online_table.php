<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleStudentOnlineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_student_online', function (Blueprint $table) {
            $table->foreignId('schedule_id');
            $table->foreignId('user_id');
            $table->timestamp('time');

            $table->primary(['schedule_id', 'user_id','time']);
            
            $table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule_student_online');
    }
}
