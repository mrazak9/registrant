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
        Schema::create('registrants_majors', function (Blueprint $table) {
            $table->id();
            $table->integer('registrantId'); //relasi dari Model Registrant
            $table->integer('majorId')->nullable(); //relasi dari model Major
            $table->string('type', 255)->nullable();
            $table->tinyInteger('graduated')->nullable();
            $table->tinyInteger('registered')->nullable();
            $table->integer('registrantAdmissionId')->nullable(); //Relasi dari model RegistrantMajor
            $table->integer('cost')->nullable();
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
        Schema::dropIfExists('registrants_majors');
    }
};
