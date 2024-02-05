<?php

namespace App\Models;

use App\Models\Other;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OtherDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'other_id',
        'file_path',
        'file_name',
        'description',
    ];

    public function other()
    {
        return $this->belongsTo(Other::class);
    }
}
