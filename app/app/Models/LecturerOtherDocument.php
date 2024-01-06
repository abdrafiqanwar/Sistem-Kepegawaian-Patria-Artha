<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LecturerOtherDocument extends Model
{
    use HasFactory;

    protected $table = 'lecturer_other_document';

    protected $fillable = [
        'lecturer_other_id',
        'document_file',
        'description',
        'document_type_id',
        'file_path',
    ];

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }

    public function lecturerOther()
    {
        return $this->belongsTo(LecturerOther::class);
    }
}
