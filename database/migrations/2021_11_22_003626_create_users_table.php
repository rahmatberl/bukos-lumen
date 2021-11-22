<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phoneNum');
            $table->string('gender')->nullable();
            $table->tinyInteger('userLevel')->comment('1 Pemilik dan 2 Penyewa'); 
            $table->string('bornDate')->nullable();
            $table->text('address')->nullable();
            $table->string('status')->nullable();
            $table->string('lastStudied')->nullable();
            $table->string('emergencyNum')->nullable();
            $table->string('job')->nullable();
            $table->string('agency')->nullable();
            $table->text('profilePhoto')->nullable();
            $table->text('identityPhoto')->nullable();
            $table->string('token')->nullable(); 
            $table->integer('chat_id')->nullable();
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
        Schema::dropIfExists('users');
    }
}
