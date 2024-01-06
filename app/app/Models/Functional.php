<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Functional extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
}
