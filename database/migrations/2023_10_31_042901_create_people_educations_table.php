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
        Schema::create('people_educations', function (Blueprint $table) {
            $table->id();
            $table->integer('peopleId');
            $table->string('level', 255)->nullable();
            $table->string('name', 255);
            $table->integer('year')->nullable();
            $table->string('status', 255)->nullable();
            $table->integer('gradeTotal')->nullable();
            $table->integer('gradeDivider')->nullable();
            $table->string('major', 255)->nullable();
            $table->string('city', 255)->nullable();
            $table->string('postalCode', 255)->nullable();
            $table->string('patron', 255)->nullable();
            $table->text('note')->nullable();
            $table->tinyInteger('certificate')->nullable();
            $table->tinyInteger('skhun')->nullable();
            $table->timestamps();
            $table->integer('createdBy')->nullable();
            $table->integer('updatedBy')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people_educations');
    }
};
