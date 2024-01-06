<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LecturerPlacement extends Model
{
    use HasFactory;

    protected $table = 'lecturer_placement';

    protected $fillable = [
        'user_id',
        'employee_status',
        'educational_level',
        'unit',
        'letter_of_assignment',
        'start_at',
        'end_at',
        'outgoing_information',
        'work_bond',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
