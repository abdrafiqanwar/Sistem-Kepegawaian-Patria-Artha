<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LecturerAddressContactDocument extends Model
{
    use HasFactory;

    protected $table = 'lac_documents';

    protected $fillable = [
        'lac_id',
        'file_name',
        'file_path',
        'description',
        'document_type_id',
    ];

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }

    public function lecturerAddressContact()
    {
        return $this->belongsTo(LecturerAddressContact::class);
    }
}
