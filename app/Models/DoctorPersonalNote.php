<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DoctorPersonalNote extends Model
{
    protected $table = 'doctor_personal_notes';

    protected $primaryKey = 'doctor_personal_note_id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'doctor_id',
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
        return $this->belongsTo(Doctor::class, 'doctor_id', 'doctor_id');
    }
}
