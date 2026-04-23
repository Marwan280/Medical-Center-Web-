<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Spatie\Permission\Traits\HasRoles;
use Filament\Models\Contracts\HasName;



class User extends Authenticatable implements FilamentUser, HasName
{
   


    protected $table = 'users';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'full_name',
        'phone_number',
        'email',
        'password',
        'role',
        'must_change_password',
        'is_active',
        'status',
        'created_by_user_id',
        'last_login_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'must_change_password' => 'boolean',
            'is_active' => 'boolean',
            'last_login_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
//new methods
    public function canAccessPanel(Panel $panel): bool
    {
        return $panel->getId() === 'admin'
            && $this->role === 'admin'
            && $this->is_active
            && $this->status === 'active';
    }

    public function getFilamentName(): string
    {
        return $this->full_name ?: $this->email ?: 'User';
    }

    public function getNameAttribute(): string
    {
        return $this->full_name ?: $this->email ?: 'User';
    }   

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_user_id', 'user_id');
    }

    public function createdUsers(): HasMany
    {
        return $this->hasMany(User::class, 'created_by_user_id', 'user_id');
    }

    public function patientProfiles(): HasMany
    {
        return $this->hasMany(PatientProfile::class, 'user_id', 'user_id');
    }

    public function createdPatientProfiles(): HasMany
    {
        return $this->hasMany(PatientProfile::class, 'created_by_user_id', 'user_id');
    }

    public function doctorAppointments(): HasMany
    {
        return $this->hasMany(Appointment::class, 'doctor_user_id', 'user_id');
    }

    public function createdAppointments(): HasMany
    {
        return $this->hasMany(Appointment::class, 'created_by_user_id', 'user_id');
    }

    public function uploadedResultFiles(): HasMany
    {
        return $this->hasMany(ResultFile::class, 'doctor_user_id', 'user_id');
    }

    public function doctorPatientNotes(): HasMany
    {
        return $this->hasMany(DoctorPatientNote::class, 'doctor_user_id', 'user_id');
    }

    public function doctorPersonalNotes(): HasMany
    {
        return $this->hasMany(DoctorPersonalNote::class, 'doctor_user_id', 'user_id');
    }

    public function auditLogs(): HasMany
    {
        return $this->hasMany(AuditLog::class, 'actor_user_id', 'user_id');
    }
}
