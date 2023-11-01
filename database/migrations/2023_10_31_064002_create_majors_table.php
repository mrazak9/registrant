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
        Schema::create('majors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('abbreviation', 255);
            $table->string('level', 255);
            $table->integer('lastStudentCode')->nullable();
            $table->integer('facultyId')->nullable(); //relasi dari model Faculty
            $table->integer('registrantCode')->nullable();
            $table->integer('studentCode')->nullable();
            $table->string('type', 255)->nullable();
            $table->string('color', 255)->nullable();
            $table->string('status', 255)->nullable();
            $table->integer('cost')->nullable();
            $table->integer('imprest')->nullable();
            $table->integer('lastRegistrantOnlineCode')->nullable();
            $table->integer('lastProfessionalStudentCode')->nullable();
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
        Schema::dropIfExists('majors');
    }
};
