<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('user_id'); // Ajouter la clé étrangère user_id
            $table->string('username')->unique();
            $table->string('password');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Ajouter la clé étrangère user_id
        });
    }

    public function down()
    {
        Schema::dropIfExists('stores');
    }
}