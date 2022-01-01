<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_systems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('location');
            $table->text('email');
            $table->text('phone');
            $table->text('facebook_account');
            $table->text('instagram_account');
            $table->text('twitter_account');
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
        Schema::dropIfExists('info_systems');
    }
}
