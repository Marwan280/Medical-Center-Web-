<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DoctorPersonalNote extends Model
{
    protected $table = 'doctor_personal_notes';
    protected $primaryKey = 'doctor_personal_note_id';

    protected $fillable = [
        'doctor_user_id',
        'note_title',
        'note_body',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'doctor_user_id', 'user_id');
    }
}