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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_company');
            $table->string('phone')->nullable();
            $table->string('establishment')->nullable();
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->string('tradelicense')->nullable();
            $table->string('logo')->nullable();
            $table->string('tradelicensefile')->nullable();
            $table->string('review')->default('Pending');
            $table->rememberToken();
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
};
