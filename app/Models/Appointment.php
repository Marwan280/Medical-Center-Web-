<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Appointment extends Model
{
    protected $table = 'appointments';

    protected $primaryKey = 'appointment_id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'patient_profile_id',
        'doctor_id',
        'appointment_type',
        'appointment_status',
        'appointment_date',
        'appointment_time',
        'home_visit_address',
        'created_by_type',
        'created_by_account_id',
        'created_by_admin_id',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'appointment_date' => 'date',
            'appointment_time' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public function patientProfile(): BelongsTo
    {
        return $this->belongsTo(PatientProfile::class, 'patient_profile_id', 'patient_profile_id');
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class, 'doctor_id', 'doctor_id');
    }

    public function createdByAccount(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'created_by_account_id', 'account_id');
    }

    public function createdByAdmin(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'created_by_admin_id', 'admin_id');
    }

    public function resultFiles(): HasMany
    {
        return $this->hasMany(ResultFile::class, 'appointment_id', 'appointment_id');
    }
}
