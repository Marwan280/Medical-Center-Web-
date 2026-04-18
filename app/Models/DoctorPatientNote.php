<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DoctorPatientNote extends Model
{
    protected $table = 'doctor_patient_notes';

    protected $primaryKey = 'doctor_patient_note_id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'doctor_id',
        'patient_profile_id',
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

    public function patientProfile(): BelongsTo
    {
        return $this->belongsTo(PatientProfile::class, 'patient_profile_id', 'patient_profile_id');
    }
}
