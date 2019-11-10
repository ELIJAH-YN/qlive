<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelforms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->unique()->index();
            $table->string('real_name');
            $table->string('nick_name')->nullable();
            $table->string('referrer')->nullable();
            $table->date('birth');
            $table->integer('contact_phone');
            $table->string('line_id')->nullable();
            $table->integer('height');
            $table->string('weight');
            $table->string('measurements')->nullable();
            $table->string('shoes_size');
            $table->string('contract');
            $table->string('facebook_url')->nullable();
            $table->string('facebook_people')->nullable();
            $table->string('ig_url')->nullable();
            $table->string('ig_people')->nullable();
            $table->string('address');
            $table->string('stream_platform_now')->nullable();
            $table->string('stream_platform_past')->nullable();
            $table->string('job');
            $table->string('interested_job');
            $table->string('resume')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('modelforms');
    }
}
