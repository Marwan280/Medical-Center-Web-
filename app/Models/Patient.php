<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Patient extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'phone',
        'name',
        'password',
        'must_change_password',
        'password_changed_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
            'must_change_password' => 'boolean',
            'password_changed_at' => 'datetime',
        ];
    }

    public function familyProfiles(): HasMany
    {
        return $this->hasMany(FamilyProfile::class);
    }

    public function primaryProfile(): HasOne
    {
        return $this->hasOne(FamilyProfile::class)->where('type', FamilyProfile::TYPE_PRIMARY);
    }

    /**
     * Ensure the account has exactly one primary (self) profile for selection flows.
     */
    public function ensurePrimaryProfile(): FamilyProfile
    {
        $primary = $this->primaryProfile()->first();

        if ($primary) {
            return $primary;
        }

        return $this->familyProfiles()->create([
            'type' => FamilyProfile::TYPE_PRIMARY,
            'full_name' => $this->name,
            'relationship' => 'Self',
            'date_of_birth' => null,
        ]);
    }

    /**
     * Normalize phone for lookup (digits only, optional leading + stripped for storage consistency).
     */
    public static function normalizePhone(string $phone): string
    {
        $digits = preg_replace('/\D+/', '', $phone);

        return $digits ?? '';
    }
}
