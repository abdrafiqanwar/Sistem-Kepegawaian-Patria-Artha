<?php

namespace App\Models;

use App\Models\Staffing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StaffingDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'staffing_id',
        'file_path',
        'file_name',
        'description',
    ];

    public function staffing()
    {
        return $this->belongsTo(Staffing::class);
    }
}
