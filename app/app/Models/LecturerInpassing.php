<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LecturerInpassing extends Model
{
    use HasFactory;

    protected $table = 'lecturer_inpassing';

    protected $fillable = [
        'user_id',
        'lcr_id',
        'inpassing_employment_number',
        'employment_number_date',
        'inpassing_start_at',
        'credit_number',
        'year_of_service',
        'month_of_service',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function  documents()
    {
        return $this->hasMany(LecturerInpassingDocument::class);
    }
}
