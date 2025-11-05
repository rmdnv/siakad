<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stage_id');
            $table->text('text');
            $table->enum('type', ['radio', 'checkbox', 'text', 'nim', 'date', 'perguruan_tinggi'])->default('radio');
            $table->unsignedBigInteger('parent_question_id')->nullable();
            $table->string('parent_answer_value')->nullable();
            $table->timestamps();

            $table->foreign('stage_id')->references('id')->on('stages')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
