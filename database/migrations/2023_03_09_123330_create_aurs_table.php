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
        Schema::create('aur', function (Blueprint $table) {
            $table->string('username')->unique();
            $table->string('email');
            $table->string('name');
            $table->string('qualification');
            $table->string('universityAttended');
            $table->date('dateOfGraduation');
            $table->string('certificate');
            $table->string('password');
            $table->id();
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
        Schema::dropIfExists('aur');
    }
};
