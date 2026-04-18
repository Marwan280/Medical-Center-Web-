<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('doctor_personal_notes', function (Blueprint $table) {
            $table->id('doctor_personal_note_id');
            $table->unsignedBigInteger('doctor_id');
            $table->string('note_title')->nullable();
            $table->longText('note_body');
            $table->timestamps();

            $table->foreign('doctor_id')
                ->references('doctor_id')
                ->on('doctors')
                ->cascadeOnDelete();

            $table->index('doctor_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('doctor_personal_notes');
    }
};