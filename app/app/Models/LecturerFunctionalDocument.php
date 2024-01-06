<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LecturerFunctionalDocument extends Model
{
    use HasFactory;

    protected $table = 'lecturer_functional_document';

    protected $fillable = [
        'lecturer_functional_id',
        'file_name',
        'file_name_original',
    ];

    public function lecturerFunctional()
    {
        return $this->belongsTo(LecturerFunctional::class);
    }
}
