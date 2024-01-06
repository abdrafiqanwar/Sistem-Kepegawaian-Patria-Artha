<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LecturerFamily extends Model
{
    use HasFactory;

    protected $table = 'lecturer_family';

    protected $fillable = [
        'user_id',
        'marital_status',
        'partner_name',
        'partner_occupation',
        'partner_nip',
        'kk_image_path',
        'is_accepted',
        'reason_of_rejection',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
