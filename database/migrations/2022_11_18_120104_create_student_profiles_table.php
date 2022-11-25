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
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->longText('summary')->nullable();

            // Personal info
            $table->date('birth_date')->nullable();
            $table->string('city')->nullable();
            $table->string('sex')->nullable();
            $table->string('phone')->nullable();

            // Academic info
            $table->string('field')->nullable();
            $table->string('study_level')->nullable();
            $table->string('university_email')->nullable()->unique();
            $table->string('apogee')->nullable();
            $table->string('cv')->nullable();

            // Professional info
            $table->json('skills')->nullable();
            $table->json('languages')->nullable();
            $table->json('links')->nullable();
            $table->json('hobbies')->nullable();

            // This tables refers to other tables : Experiences, Projects, Educations, Cerifications
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
        Schema::dropIfExists('student_profiles');
    }
};
