<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZoomApisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zoom__apis', function (Blueprint $table) {
            $table->id();
            $table->integer('uuid')->nullable();
            $table->integer('host_id')->nullable();
            $table->text('host_email')->nullable();
            $table->string('topic')->nullable();
            $table->integer('type')->nullable();
            $table->string('status')->nullable();
            $table->string('start_time')->nullable();
            $table->string('start_date')->nullable();
            $table->integer('duration')->nullable();
            $table->string('timezone')->nullable();
            $table->text('start_url')->nullable();
            $table->text('join_url')->nullable();
            $table->string('password')->nullable();
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
        Schema::dropIfExists('zoom__apis');
    }
}