<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Admin extends Model
{
    protected $table = 'admins';

    protected $primaryKey = 'admin_id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'full_name',
        'phone_number',
        'email',
        'password',
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

    public function creatorAdmin(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'created_by_admin_id', 'admin_id');
    }

    public function createdAdmins(): HasMany
    {
        return $this->hasMany(Admin::class, 'created_by_admin_id', 'admin_id');
    }

    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class, 'created_by_admin_id', 'admin_id');
    }

    public function patientProfiles(): HasMany
    {
        return $this->hasMany(PatientProfile::class, 'created_by_admin_id', 'admin_id');
    }

    public function doctors(): HasMany
    {
        return $this->hasMany(Doctor::class, 'created_by_admin_id', 'admin_id');
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class, 'created_by_admin_id', 'admin_id');
    }

    public function auditLogs(): HasMany
    {
        return $this->hasMany(AuditLog::class, 'actor_admin_id', 'admin_id');
    }
}
