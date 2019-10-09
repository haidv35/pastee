<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paste', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable(true);
            $table->string('title')->nullable(false);
            $table->text('content')->nullable(false);
            $table->string('syntax')->nullable(false);
            $table->dateTime('date_added')->nullable(false);
            $table->dateTime('date_expires')->nullable(false);
            $table->integer('views')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paste');
    }
}
