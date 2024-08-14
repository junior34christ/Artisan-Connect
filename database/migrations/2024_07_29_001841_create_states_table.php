<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('user_id'); // Ajouter la clé étrangère user_id
            $table->foreignId('country_id')->constrained()->onDelete('cascade');
            $table->boolean('status')->default(1); // 1 for enabled, 0 for disabled
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Ajouter la clé étrangère user_id
        });
    }

    public function down()
    {
        Schema::dropIfExists('states');
    }
}