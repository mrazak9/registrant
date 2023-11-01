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
        Schema::create('registrants', function (Blueprint $table) {
            $table->id();
            $table->string('code', 255);
            $table->integer('peopleId');
            $table->integer('year');
            $table->integer('phase');
            $table->integer('donation')->default(0);
            $table->timestamps();
            $table->integer('createdBy')->nullable();
            $table->integer('updatedBy')->nullable();
            $table->tinyInteger('admitted')->default(0);
            $table->date('admittedDate')->nullable();
            $table->string('status', 255)->nullable();
            $table->string('route', 255)->nullable();
            $table->string('type', 255)->nullable();
            $table->date('registrationDueDate')->nullable();
            $table->unsignedBigInteger('referalId')->nullable();
            $table->string('source', 255)->nullable();
            $table->integer('eagerProceed')->nullable();
            $table->string('virtualAccount', 255)->nullable();
            $table->tinyInteger('isAlumniSibling')->nullable();
            $table->tinyInteger('isPartisipantTraining')->nullable();
            $table->integer('pu')->nullable();
            $table->tinyInteger('isPmdk')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrants');
    }
};
