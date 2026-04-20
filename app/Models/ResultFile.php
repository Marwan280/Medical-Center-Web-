<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ResultFile extends Model
{
    protected $table = 'result_files';
    protected $primaryKey = 'result_file_id';
    public $timestamps = false;

    protected $fillable = [
        'appointment_id',
        'doctor_user_id',
        'test_name',
        'file_name',
        'file_path',
        'mime_type',
        'file_size',
        'is_latest',
        'replaced_result_file_id',
        'uploaded_at',
        'updated_at',
    ];

    protected function casts(): array
    {
        return [
            'is_latest' => 'boolean',
            'uploaded_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class, 'appointment_id', 'appointment_id');
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'doctor_user_id', 'user_id');
    }

    public function replacedResultFile(): BelongsTo
    {
        return $this->belongsTo(ResultFile::class, 'replaced_result_file_id', 'result_file_id');
    }

    public function replacementFiles(): HasMany
    {
        return $this->hasMany(ResultFile::class, 'replaced_result_file_id', 'result_file_id');
    }
}