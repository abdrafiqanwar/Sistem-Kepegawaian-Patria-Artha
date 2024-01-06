<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LecturerScientificField extends Model
{
    use HasFactory;

    protected $fillable = [
        'scientific_field_code',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scientificField()
    {
        return $this->belongsTo(ScientificField::class);
    }
}
