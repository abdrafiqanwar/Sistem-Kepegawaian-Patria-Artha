<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LecturerStaffing extends Model
{
    use HasFactory;

    protected $table = 'lecturer_staffing';

    protected $fillable = [
        'user_id',
        'nip',
        'sk_cpns',
        'sk_cpns_start_at',
        'tmmd_number',
        'sk_tmmd_start_at',
        'is_accepted',
        'reason_for_rejection',
        'source_of_income',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function documents()
    {
        return $this->hasMany(LecturerStaffingDocument::class);
    }
}
