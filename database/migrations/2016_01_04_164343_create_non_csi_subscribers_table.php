<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNonCsiSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('non_csi_subscribers', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('email_id')->unsigned();
            $table->bigInteger('event_id')->unsigned();
            $table->tinyInteger('Payment_status')->default(0);
            $table->timestamps();

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
        Schema::drop('non_csi_subscribers');
    }
}
