<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export (1.4.1)
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('appointment_time');
            $table->string('title', 255)->nullable();
            $table->text('desc')->nullable();
            $table->unsignedInteger('room_id')->nullable();
            $table->unsignedInteger('service_id')->nullable();
            $table->text('invited_email')->nullable();
            $table->timestamps();
            $table->unsignedInteger('updated_by')->nullable();
        });

        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
