<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'user_id',
        'full_name',
        'phone',
        'date_of_birth',
        'gender',
        'address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}