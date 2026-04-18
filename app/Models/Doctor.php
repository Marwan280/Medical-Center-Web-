<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Doctor extends Model
{
    protected $table = 'doctors';

    protected $primaryKey = 'doctor_id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'full_name',
        'phone_number',
        'email',
        'password',
        'specialization',
        'is_active',
        'status',
        'created_by_admin_id',
    ];

    protected $hidden = [
        'password',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
            'is_active' => 'boolean',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public function createdByAdmin(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'created_by_admin_id', 'admin_id');
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class, 'doctor_id', 'doctor_id');
    }

    public function resultFiles(): HasMany
    {
        return $this->hasMany(ResultFile::class, 'doctor_id', 'doctor_id');
    }

    public function doctorPatientNotes(): HasMany
    {
        return $this->hasMany(DoctorPatientNote::class, 'doctor_id', 'doctor_id');
    }

    public function doctorPersonalNotes(): HasMany
    {
        return $this->hasMany(DoctorPersonalNote::class, 'doctor_id', 'doctor_id');
    }

    public function auditLogs(): HasMany
    {
        return $this->hasMany(AuditLog::class, 'actor_doctor_id', 'doctor_id');
    }
}
