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

    public function lecturerFamilies()
    {
        return $this->hasMany(LecturerFamily::class);
    }

    public function lecturerProfiles()
    {
        return $this->hasMany(LecturerProfile::class);
    }

    public function lecturerCitizenships()
    {
        return $this->hasMany(LecturerCitizenship::class);
    }

    public function lecturerPlacements()
    {
        return $this->hasMany(LecturerPlacement::class);
    }

    public function lecturerFunctionals()
    {
        return $this->hasMany(LecturerFunctional::class);
    }

    public function lecturerAddressContacts()
    {
        return $this->hasMany(LecturerAddressContact::class);
    }

    public function lecturerStaffings()
    {
        return $this->hasMany(LecturerStaffing::class);
    }

    public function lecturerOthers()
    {
        return $this->hasMany(LecturerOther::class);
    }

    public function lecturerInpassings()
    {
        return $this->hasMany(LecturerInpassing::class);
    }

    public function lecturerScientificField()
    {
        return $this->belongsToMany(ScientificField::class, 'scientific_field_user', 'user_id', 'scientific_field_code');
    }

    // Mungkin ini bisa dipakai untuk langsung ambil data yang accepted, belum dicoba
    /* public function lecturerProfile() */
    /* { */
    /*     return $this->hasOne(LecturerProfile::class)->where('is_accepted', 'ACCEPTED'); */
    /* } */
}
