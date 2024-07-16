<?php

namespace App\Models\UserModule;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRefProfiles extends Model
{
    use HasFactory;

    protected $table = 'ref_user_profiles';
    protected  $primaryKey = 'id';
    
    protected $fillable = [
        'user_id',
        'bank_info',
        'personal_info',
        'address_info',
    ];
}
