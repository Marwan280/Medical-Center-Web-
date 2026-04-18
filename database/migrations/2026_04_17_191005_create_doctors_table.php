<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id('doctor_id');
            $table->string('full_name');
            $table->string('phone_number')->unique();
            $table->string('email')->nullable()->unique();
            $table->string('password');
            $table->string('specialization')->nullable();
            $table->boolean('is_active')->default(true);
            $table->enum('status', ['active', 'inactive', 'blocked', 'archived'])->default('active');
            $table->unsignedBigInteger('created_by_admin_id');
            $table->timestamps();

            $table->foreign('created_by_admin_id')
                ->references('admin_id')
                ->on('admins')
                ->restrictOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};