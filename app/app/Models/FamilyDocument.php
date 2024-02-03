<?php

namespace App\Models;

use App\Models\Family;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FamilyDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'family_id',
        'file_doc',
        'description',
    ];

    public function family()
    {
        return $this->belongsTo(Family::class);
    }
}
