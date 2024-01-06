<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LecturerAddressContact extends Model
{
    use HasFactory;

    protected $table = 'lecturer_address_contact';

    protected $fillable = [
        'user_id',
        'email',
        'address',
        'rt',
        'rw',
        'sub_village',
        'village',
        'city_discrict_sub_district',
        'postal_code',
        'home_phone_number',
        'phone_number',
        'reason_for_rejection',
        'is_accepted',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function documents()
    {
        return $this->hasMany(LecturerAddressContactDocument::class);
    }
}
