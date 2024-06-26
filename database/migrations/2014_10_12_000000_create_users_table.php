<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('google_id')->nullable();
            $table->string("name");
            $table->string('email')->unique()->nullable();
            $table->string('nik')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('phone_number',16)->nullable();
            $table->enum('role',['admin','employee','student']);
            $table->string("image")->nullable();
                $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
