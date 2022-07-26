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
        Schema::create('applications', function (Blueprint $table) {
           
                $table->id();
                $table->string('comapny_id'); //company id
                $table->string('listing_id');
                $table->string('title');
                $table->string('tags');
                $table->string('company');
                $table->longText('cover_letter');
                $table->string('website');
                $table->foreignId('applicant_id')->constrained()->onDelete('cascade'); //who is applying
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('applications');
    }
};
