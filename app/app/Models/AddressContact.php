<?php

namespace App\Models;

use App\Models\User;
use App\Models\AddressContactDocument;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AddressContact extends Model
{
    use HasFactory;
    
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
        'ktp_image_path',
        'is_accepted',
        'reason_for_rejection',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function documents()
    {
        return $this->hasMany(AddressContactDocument::class);
    }
}
