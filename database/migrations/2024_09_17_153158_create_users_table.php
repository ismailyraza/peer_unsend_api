<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary(); // UUID for user ID
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}