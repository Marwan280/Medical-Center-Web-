<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PatientProfile extends Model
{
    protected $table = 'patient_profiles';

    protected $primaryKey = 'patient_profile_id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'account_id',
        'full_name',
        'gender',
        'date_of_birth',
        'national_id',
        'address',
        'email',
        'relationship_to_primary',
        'is_primary',
        'created_by_admin_id',
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

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'account_id', 'account_id');
    }

    public function createdByAdmin(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'created_by_admin_id', 'admin_id');
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
