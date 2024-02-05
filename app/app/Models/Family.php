<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Family extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'martial_status',
        'partner_name',
        'partner_occupation',
        'partner_nip',
        'kk_image_path',
        'kk_name',
        'is_accepted',
        'reason_for_rejection',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
