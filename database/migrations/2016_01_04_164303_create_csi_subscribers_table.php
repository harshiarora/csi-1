<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCsiSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csi_subscribers', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('subscriber_id')->unsigned();
            $table->bigInteger('event_id')->unsigned();
            $table->bigInteger('member_id')->unsigned();
            $table->tinyInteger('Payment_status')->default(0);
            $table->timestamps();

            $table->foreign('member_id')
                    ->references('id')->on('members')
                    ->onDelete('CASCADE')
                    ->onUpdate('CASCADE');

            $table->foreign('event_id')
                    ->references('event_id')->on('events')
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
        Schema::drop('csi_subscribers');
    }
}
