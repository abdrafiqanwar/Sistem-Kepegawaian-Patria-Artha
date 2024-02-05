<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Other extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'npwp',
        'tax_name',
        'npwp_path',
        'npwp_name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
