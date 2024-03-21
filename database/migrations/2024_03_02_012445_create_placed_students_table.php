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
        Schema::create('placed_students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('branch');
            $table->string('usn');
            $table->string('company');
            $table->string('package')->default('Internship');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('placed_students');
    }
};
