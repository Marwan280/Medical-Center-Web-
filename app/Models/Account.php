<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends Model
{
    protected $table = 'accounts';

    protected $primaryKey = 'account_id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'phone_number',
        'password',
        'must_change_password',
        'is_active',
        'status',
        'created_by_admin_id',
        'last_login_at',
    ];

    protected $hidden = [
        'password',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
            'must_change_password' => 'boolean',
            'is_active' => 'boolean',
            'last_login_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public function createdByAdmin(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'created_by_admin_id', 'admin_id');
    }

    public function patientProfiles(): HasMany
    {
        return $this->hasMany(PatientProfile::class, 'account_id', 'account_id');
    }

    public function createdAppointments(): HasMany
    {
        return $this->hasMany(Appointment::class, 'created_by_account_id', 'account_id');
    }

    public function auditLogs(): HasMany
    {
        return $this->hasMany(AuditLog::class, 'actor_account_id', 'account_id');
    }
}
