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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('nickname', 255)->nullable();
            $table->string('preTitle', 255)->nullable();
            $table->string('postTitle', 255)->nullable();
            $table->string('gender', 255)->nullable();
            $table->date('birthDate')->nullable();
            $table->string('birthPlace', 255)->nullable();
            $table->string('nationality', 255)->nullable();
            $table->string('religion', 255)->nullable();
            $table->string('matrimony', 255)->nullable();
            $table->integer('bornSequence')->nullable();
            $table->integer('siblingTotal')->nullable();
            $table->timestamps();
            $table->integer('createdBy')->nullable();
            $table->integer('updatedBy')->nullable();
            $table->string('identity_number', 255)->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
