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
        Schema::create('thirds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('grade_id');
            $table->foreignId('student_id');
            $table->integer('hindi')->nullable();
            $table->integer('english')->nullable();
            $table->integer('math')->nullable();
            $table->integer('rhymes')->nullable();
            $table->integer('drawing')->nullable();
            $table->integer('gk')->nullable();
            $table->integer('sst')->nullable();
            $table->integer('science')->nullable();
            $table->integer('computer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thirds');
    }
};
