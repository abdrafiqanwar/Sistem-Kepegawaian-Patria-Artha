<?php

namespace App\Models;

use App\Models\AddressContact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AddressContactDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'address_contact_id',
        'file_path',
        'file_name',
        'description',
    ];

    public function addressContact()
    {
        return $this->belongsTo(AddressContact::class);
    }
}
