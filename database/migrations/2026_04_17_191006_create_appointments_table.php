<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('appointment_id');
            $table->unsignedBigInteger('patient_profile_id');
            $table->unsignedBigInteger('doctor_id');

            $table->enum('appointment_type', ['in_lab', 'home_visit']);
            $table->enum('appointment_status', ['pending', 'confirmed', 'completed', 'cancelled'])->default('pending');

            $table->date('appointment_date');
            $table->time('appointment_time')->nullable();
            $table->text('home_visit_address')->nullable();

            $table->enum('created_by_type', ['patient', 'admin']);
            $table->unsignedBigInteger('created_by_account_id')->nullable();
            $table->unsignedBigInteger('created_by_admin_id')->nullable();

            $table->text('notes')->nullable();
            $table->timestamps();

            $table->foreign('patient_profile_id')
                ->references('patient_profile_id')
                ->on('patient_profiles')
                ->cascadeOnDelete();

            $table->foreign('doctor_id')
                ->references('doctor_id')
                ->on('doctors')
                ->restrictOnDelete();

            $table->foreign('created_by_account_id')
                ->references('account_id')
                ->on('accounts')
                ->nullOnDelete();

            $table->foreign('created_by_admin_id')
                ->references('admin_id')
                ->on('admins')
                ->nullOnDelete();

            $table->index('patient_profile_id');
            $table->index('doctor_id');
            $table->index('created_by_account_id');
            $table->index('created_by_admin_id');
            $table->index(['appointment_date', 'appointment_status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};