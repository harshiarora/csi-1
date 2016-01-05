<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('event_id')->unsigned();
            $table->string('event_name', '30');
            $table->bigInteger('event_type_id')->unsigned();
            $table->bigInteger('member_id')->unsigned();
            $table->string('event_description', '1024');
            $table->string('event_venue', '100');
            $table->date('event_start_date');
            $table->date('event_end_date');
            $table->time('event_start_time');
            $table->time('event_end_time');
            $table->tinyInteger('event_status');
            $table->tinyInteger('payment_option');
            $table->integer('max_seats')->unsigned();
            $table->date('registration_open_date');
            $table->date('registration_close_date');
            $table->date('payment_date_deadline')->nullable();
            $table->time('payment_time_deadline')->nullable();
            $table->timestamps();

            $table->foreign('member_id')
                    ->references('id')->on('members')
                    ->onDelete('CASCADE')
                    ->onUpdate('CASCADE');

            $table->foreign('event_type_id')
                    ->references('event_type_id')->on('event_types')
                    ->onDelete('CASCADE')
                    ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}
