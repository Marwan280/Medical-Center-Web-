<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('patient_profiles', function (Blueprint $table) {
            $table->id('patient_profile_id');
            $table->unsignedBigInteger('user_id');
            $table->string('full_name');
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('national_id')->nullable()->unique();
            $table->text('address')->nullable();
            $table->string('email')->nullable();
            $table->string('relationship_to_primary');
            $table->boolean('is_primary')->default(false);
            $table->unsignedBigInteger('created_by_user_id')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('user_id')
                ->references('user_id')
                ->on('users')
                ->cascadeOnDelete();

            $table->foreign('created_by_user_id')
                ->references('user_id')
                ->on('users')
                ->nullOnDelete();

            $table->index('user_id');
            $table->index('created_by_user_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('patient_profiles');
    }
};