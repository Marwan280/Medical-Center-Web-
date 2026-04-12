<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FamilyProfile extends Model
{
    public const TYPE_PRIMARY = 'primary';

    public const TYPE_DEPENDENT = 'dependent';

    protected $fillable = [
        'patient_id',
        'type',
        'full_name',
        'relationship',
        'date_of_birth',
    ];

    protected function casts(): array
    {
        return [
            'date_of_birth' => 'date',
        ];
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function isPrimary(): bool
    {
        return $this->type === self::TYPE_PRIMARY;
    }

    public function isDependent(): bool
    {
        return $this->type === self::TYPE_DEPENDENT;
    }
}
