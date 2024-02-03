<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'profile_image_path',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function addressContacts()
    {
        return $this->hasMany(AddressContact::class);
    }
    
    public function citizenships()
    {
        return $this->hasMany(Citizenship::class);
    }

    public function families()
    {
        return $this->hasMany(Family::class);
    }

    public function others()
    {
        return $this->hasMany(Other::class);
    }

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }

    public function scientificFields()
    {
        return $this->belongsToMany(ScientificFieldType::class, 'scientific_fields', 'user_id', 'scientific_field_id');
    }

    public function staffings()
    {
        return $this->hasMany(Staffing::class);
    }

    // public function lecturerFunctionals()
    // {
    //     return $this->hasMany(LecturerFunctional::class);
    // }

    // public function lecturerInpassings()
    // {
    //     return $this->hasMany(LecturerInpassing::class);
    // }

    // Mungkin ini bisa dipakai untuk langsung ambil data yang accepted, belum dicoba
    /* public function lecturerProfile() */
    /* { */
    /*     return $this->hasOne(LecturerProfile::class)->where('is_accepted', 'ACCEPTED'); */
    /* } */
}
