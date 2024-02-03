<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Citizenship extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nik',
        'religion',
        'nationality',
        'kk_image_path',
        'ktp_image_path',
        'is_accepted',
        'reason_for_rejection',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
