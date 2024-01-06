<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LecturerStaffingDocument extends Model
{
    use HasFactory;

    protected $table = 'lecturer_staffing_document';

    protected $fillable = [
        'lecturer_staffing_id',
        'document_file',
        'description',
        'document_type_id',
        'file_path',
    ];

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }

    public function lecturerStaffing()
    {
        return $this->belongsTo(LecturerStaffing::class);
    }
}

