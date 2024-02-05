<?php

namespace App\Models;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProfileDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'file_doc',
        'file_name',
        'description',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
