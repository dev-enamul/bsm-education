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
        Schema::create('register_surveys', function (Blueprint $table) {
            $table->id();
            $table->enum('married', ['Yes', 'No'])->nullable();
            $table->enum('children', ['Yes', 'No'])->nullable();
            $table->enum('children1', ['Yes', 'No'])->nullable();
            $table->enum('family', ['Yes', 'No'])->nullable();
            $table->enum('lived', ['Yes', 'No'])->nullable();
            $table->enum('visa', ['Yes', 'No'])->nullable();
            $table->enum('green', ['Yes', 'No'])->nullable();
            $table->enum('entearing', ['Yes', 'No'])->nullable();
            $table->enum('removal', ['Yes', 'No'])->nullable();
            $table->enum('illegally', ['Yes', 'No'])->nullable();
            $table->enum('remove', ['Yes', 'No'])->nullable();
            $table->enum('citizen', ['Yes', 'No'])->nullable();
            $table->enum('criminal', ['Yes', 'No'])->nullable();
            $table->enum('enterprise', ['Yes', 'No'])->nullable();
            $table->enum('engage', ['Yes', 'No'])->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
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
        Schema::dropIfExists('register_surveys');
    }
};
