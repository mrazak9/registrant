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
        Schema::create('registrants_admissions', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('year');
            $table->integer('phase');
            $table->integer('registrantId');
            $table->integer('price')->default(0);
            $table->text('note')->nullable();
            $table->integer('scholarshipId')->nullable();
            $table->integer('employee_id')->nullable();
            $table->string('method', 255)->nullable();
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
        Schema::dropIfExists('registrants_admissions');
    }
};
