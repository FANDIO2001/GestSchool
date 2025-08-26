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
            $table->string('fathersname');
            $table->string('mothersname');
            $table->string('phone_number'); //mobile number of the parents
            $table->string('matricule')->unique();
            $table->enum('stus', ['regulier', 'irregulier', 'demisionnaire', 'exclu', 'observation'])->default('regulier');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
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
