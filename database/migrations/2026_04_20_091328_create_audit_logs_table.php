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
            $table->unsignedBigInteger('actor_user_id')->nullable();
            $table->enum('actor_type', ['user', 'system']);
            $table->string('action_type');
            $table->string('entity_type');
            $table->unsignedBigInteger('entity_id')->nullable();
            $table->longText('action_details')->nullable();
            $table->timestamp('created_at')->useCurrent();

            $table->foreign('actor_user_id')
                ->references('user_id')
                ->on('users')
                ->nullOnDelete();

            $table->index('actor_user_id');
            $table->index(['entity_type', 'entity_id']);
            $table->index('action_type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('audit_logs');
    }
};