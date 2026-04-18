<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id('account_id');
            $table->string('phone_number')->unique();
            $table->string('password');
            $table->boolean('must_change_password')->default(false);
            $table->boolean('is_active')->default(true);
            $table->enum('status', ['active', 'inactive', 'blocked', 'archived'])->default('active');
            $table->unsignedBigInteger('created_by_admin_id')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->timestamps();

            $table->foreign('created_by_admin_id')
                ->references('admin_id')
                ->on('admins')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};