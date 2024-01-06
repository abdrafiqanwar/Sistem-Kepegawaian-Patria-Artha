<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LecturerCitizenship extends Model
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
