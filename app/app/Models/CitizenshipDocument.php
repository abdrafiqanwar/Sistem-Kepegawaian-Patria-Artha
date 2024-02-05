<?php

namespace App\Models;

use App\Models\Citizenship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CitizenshipDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'citizenship_id',
        'file_path',
        'file_name',
        'description',
    ];

    public function citizenship()
    {
        return $this->belongsTo(Citizenship::class);
    }
}
