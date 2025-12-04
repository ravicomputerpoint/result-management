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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('grade_id');
            $table->string('roll_no');
            $table->string('admission_no');
            $table->string('name');
            $table->string('father');
            $table->string('mother');
            $table->date('dob');
            $table->string('address');
            $table->boolean('is_third')->default(0);
            $table->boolean('is_half')->default(0);
            $table->boolean('is_year')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
