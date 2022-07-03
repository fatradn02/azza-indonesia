<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('instagram');
            $table->string('facebook');
            $table->string('linkedin');
            $table->string('youtube');
            $table->string('address');
            $table->string('email');
            $table->string('phone_number');
            $table->string('logo');
            $table->text('tagline_1');
            $table->text('tagline_2');
            $table->text('tagline_3');
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
        Schema::dropIfExists('settings');
    }
};
