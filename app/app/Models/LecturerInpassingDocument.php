<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LecturerInpassingDocument extends Model
{
    use HasFactory;

    protected $table = 'lecturer_inpassing_document';

    protected $fillable = [
        'li_id',
        'document_type_id',
        'file_path',
        'file_name',
        'description',
    ];

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }

    public function lecturerInpassing()
    {
        return $this->belongsTo(LecturerInpassing::class);
    }
}
