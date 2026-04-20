<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PatientProfile extends Model
{
    protected $table = 'patient_profiles';
    protected $primaryKey = 'patient_profile_id';

    protected $fillable = [
        'user_id',
        'full_name',
        'gender',
        'date_of_birth',
        'national_id',
        'address',
        'email',
        'relationship_to_primary',
        'is_primary',
        'created_by_user_id',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'date_of_birth' => 'date',
            'is_primary' => 'boolean',
            'is_active' => 'boolean',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_user_id', 'user_id');
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class, 'patient_profile_id', 'patient_profile_id');
    }

    public function doctorPatientNotes(): HasMany
    {
        return $this->hasMany(DoctorPatientNote::class, 'patient_profile_id', 'patient_profile_id');
    }
}