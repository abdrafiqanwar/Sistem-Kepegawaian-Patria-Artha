<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nidn',
        'full_name',
        'gender',
        'place_of_birth',
        'date_of_birth',
        'mother_name',
        'ktp_image_path',
        'kk_image_path',
        'is_accepted',
        'reason_for_rejection',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function getGenderAttribute($value){
    //     if($value == 'MALE'){
    //         return 'Laki-Laki';
    //     }elseif($value == 'FEMALE'){
    //         return 'Perempuan';
    //     }else{
    //         return 'Tidak Diketahui';
    //     }
    // }
}
