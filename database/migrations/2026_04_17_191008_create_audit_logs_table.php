<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('audit_logs', function (Blueprint $table) {
            $table->id('audit_log_id');

            $table->enum('actor_type', ['patient', 'doctor', 'admin', 'system']);
            $table->unsignedBigInteger('actor_account_id')->nullable();
            $table->unsignedBigInteger('actor_doctor_id')->nullable();
            $table->unsignedBigInteger('actor_admin_id')->nullable();

            $table->string('action_type');
            $table->string('entity_type');
            $table->unsignedBigInteger('entity_id')->nullable();
            $table->longText('action_details')->nullable();

            $table->timestamp('created_at')->useCurrent();

            $table->foreign('actor_account_id')
                ->references('account_id')
                ->on('accounts')
                ->nullOnDelete();

            $table->foreign('actor_doctor_id')
                ->references('doctor_id')
                ->on('doctors')
                ->nullOnDelete();

            $table->foreign('actor_admin_id')
                ->references('admin_id')
                ->on('admins')
                ->nullOnDelete();

            $table->index('actor_account_id');
            $table->index('actor_doctor_id');
            $table->index('actor_admin_id');
            $table->index(['entity_type', 'entity_id']);
            $table->index('action_type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('audit_logs');
    }
};