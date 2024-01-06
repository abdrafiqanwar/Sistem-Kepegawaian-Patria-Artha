<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LecturerProfile extends Model
{
    use HasFactory;

    protected $table = 'lecturer_profile';

    protected $fillable = [
        'user_id',
        'nidn',
        'full_name',
        'gender',
        'place_of_birth',
        'date_of_birth',
        'mother_name',
        'is_accepted',
        'reason_for_rejection',
        'ktp_image_path',
        'kk_image_path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
