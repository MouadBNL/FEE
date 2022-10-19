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
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('field')->nullable();
            $table->longText('description')->nullable();
            $table->string('location')->nullable();
            $table->string('logo')->nullable();
            $table->string('banner')->nullable();

            $table->string('linkdin')->nullable();
            $table->string('website')->nullable();
            $table->json('socials')->nullable();
            
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
        Schema::dropIfExists('company_profiles');
    }
};