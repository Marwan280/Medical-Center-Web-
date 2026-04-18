<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AuditLog extends Model
{
    protected $table = 'audit_logs';

    protected $primaryKey = 'audit_log_id';

    public $incrementing = true;

    protected $keyType = 'int';

    const UPDATED_AT = null;

    protected $fillable = [
        'actor_type',
        'actor_account_id',
        'actor_doctor_id',
        'actor_admin_id',
        'action_type',
        'entity_type',
        'entity_id',
        'action_details',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
        ];
    }

    public function actorAccount(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'actor_account_id', 'account_id');
    }

    public function actorDoctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class, 'actor_doctor_id', 'doctor_id');
    }

    public function actorAdmin(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'actor_admin_id', 'admin_id');
    }
}
