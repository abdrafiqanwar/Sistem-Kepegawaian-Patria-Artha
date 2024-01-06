<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LecturerFunctional extends Model
{
    use HasFactory;

    protected $table = 'lecturer_functional';

    protected $fillable = [
        'user_id',
        'functional_id',
        'employment_number',
        'functional_start_at',
        'is_accepted',
        'reason_for_rejection',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function documents()
    {
        return $this->hasMany(LecturerFunctionalDocument::class);
    }
}
