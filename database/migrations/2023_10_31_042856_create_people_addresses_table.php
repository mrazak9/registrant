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
        Schema::create('people_addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('peopleId');
            $table->string('name', 255);
            $table->string('street', 255);
            $table->string('city', 255)->nullable();
            $table->string('postalCode', 255)->nullable();
            $table->string('province', 255)->nullable();
            $table->string('village', 255)->nullable();
            $table->string('district', 255)->nullable();
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
        Schema::dropIfExists('people_addresses');
    }
};
