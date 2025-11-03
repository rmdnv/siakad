<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tracer_study', function (Blueprint $table) {
            $table->id();
            $table->string('nis', 64)->unique();
            $table->string('nisn', 64)->unique();
            $table->string('nama', 100);
            $table->string('kompetensi_keahlian', 100);
            $table->string('no_hp', 20)->nullable();
            $table->string('status', 50);
            $table->string('status_supervisor', 50)->default('-');
            $table->string('nis_hash', 64)->nullable();
            $table->string('nisn_hash', 64)->nullable();
            $table->timestamp('updated_at')
                ->useCurrent()
                ->useCurrentOnUpdate()
                ->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tracer_study');
    }
};
