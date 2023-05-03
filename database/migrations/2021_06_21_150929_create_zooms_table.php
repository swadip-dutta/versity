<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zooms', function (Blueprint $table) {
            $table->id();
            $table->integer('uuid');
            $table->integer('host_id');
            $table->text('host_email');
            $table->string('topic');
            $table->integer('type');
            $table->string('status');
            $table->string('start_time');
            $table->integer('duration');
            $table->string('timezone');
            $table->text('start_url');
            $table->text('join_url');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zooms');
    }
}
