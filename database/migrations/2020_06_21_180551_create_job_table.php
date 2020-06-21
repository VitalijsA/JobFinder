<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 25);
            $table->string('description', 1000);
            $table->integer('salary');
            $table->string('emailaddress');
            $table->integer('phonenum');
            $table->string('keyword', 25);
            $table->date('dateuntil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job');
    }
}
