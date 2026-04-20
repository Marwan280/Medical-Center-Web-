<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('result_files', function (Blueprint $table) {
            $table->id('result_file_id');
            $table->unsignedBigInteger('appointment_id');
            $table->unsignedBigInteger('doctor_user_id');
            $table->string('test_name');
            $table->string('file_name');
            $table->string('file_path');
            $table->string('mime_type')->nullable();
            $table->unsignedBigInteger('file_size')->nullable();
            $table->boolean('is_latest')->default(true);
            $table->unsignedBigInteger('replaced_result_file_id')->nullable();
            $table->timestamp('uploaded_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();

            $table->foreign('appointment_id')
                ->references('appointment_id')
                ->on('appointments')
                ->cascadeOnDelete();

            $table->foreign('doctor_user_id')
                ->references('user_id')
                ->on('users')
                ->restrictOnDelete();

            $table->foreign('replaced_result_file_id')
                ->references('result_file_id')
                ->on('result_files')
                ->nullOnDelete();

            $table->index('appointment_id');
            $table->index('doctor_user_id');
            $table->index('replaced_result_file_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('result_files');
    }
};