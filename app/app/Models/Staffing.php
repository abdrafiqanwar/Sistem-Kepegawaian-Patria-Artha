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
        'source_of_income',
        'sk_cpns_path',
        'sk_learning_assignments_path',
        'sk_reactivation_path',
        'sk_cpns_name',
        'sk_learning_assignments_name',
        'sk_reactivation_name',
        'is_accepted',
        'reason_for_rejection',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
