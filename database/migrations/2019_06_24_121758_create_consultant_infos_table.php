<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultantInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultant_infos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('first_name');
            $table->string('last_name');
            $table->string('avatar')->default('consultant.jpg');
            $table->date('birthday')->nullable();
            $table->text('about_me')->nullable();
            $table->string('email');
            $table->string('skype_url')->nullable();
            $table->string('fb_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('instagram_url')->nullable();

            $table->unsignedInteger('consultant_id');

            $table->timestamps();

            $table->foreign('consultant_id')->references('id')->on('consultants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultant_infos');
    }
}
