<?php

namespace App\Models\UserModule;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribers extends Model
{
    use HasFactory;

    protected $table = 'subscribers';
    protected  $primaryKey = 'id';
    
    protected $fillable = [
        'email',
    ];
}
