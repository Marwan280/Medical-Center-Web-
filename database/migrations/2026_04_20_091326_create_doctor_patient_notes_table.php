<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('doctor_patient_notes', function (Blueprint $table) {
            $table->id('doctor_patient_note_id');
            $table->unsignedBigInteger('doctor_user_id');
            $table->unsignedBigInteger('patient_profile_id');
            $table->string('note_title')->nullable();
            $table->longText('note_body');
            $table->timestamps();

            $table->foreign('doctor_user_id')
                ->references('user_id')
                ->on('users')
                ->cascadeOnDelete();

            $table->foreign('patient_profile_id')
                ->references('patient_profile_id')
                ->on('patient_profiles')
                ->cascadeOnDelete();

            $table->index('doctor_user_id');
            $table->index('patient_profile_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('doctor_patient_notes');
    }
};