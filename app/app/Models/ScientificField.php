<?php

namespace App\Models;

use App\Models\User;
use App\Models\ScientificFieldType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ScientificField extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'scientific_field_type_id',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scientificField()
    {
        return $this->belongsTo(ScientificFieldType::class);
    }
}
