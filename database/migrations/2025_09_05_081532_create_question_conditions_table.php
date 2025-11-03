<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('question_conditions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->constrained('questions')->onDelete('cascade');
            $table->unsignedBigInteger('parent_question_id');
            $table->string('parent_answer_value');
            $table->enum('operator', ['=', '!=', '||', 'ATAU'])->default('=');
            $table->timestamps();

            $table->foreign('parent_question_id')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('question_conditions');
    }
};
