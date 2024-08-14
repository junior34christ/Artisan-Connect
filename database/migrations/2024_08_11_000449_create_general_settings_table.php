<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('time_zone')->nullable();
            $table->string('currency');
            $table->string('date_format');
            $table->string('email');
            $table->string('phone');
            $table->text('address');
            $table->string('product_image')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Ajouter la clé étrangère user_id
        });
    }

    public function down()
    {
        Schema::dropIfExists('general_settings');
    }
}