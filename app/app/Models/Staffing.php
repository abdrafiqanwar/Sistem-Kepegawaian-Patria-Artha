<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staffing extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nip',
        'sk_cpns',
        'sk_cpns_start_at',
        'sk_tmmd_number',
        'sk_tmmd_start_at',
        'is_accepted',
        'reason_for_rejection',
        'source_of_income',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
