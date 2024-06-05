<?php

namespace App\Models\AnalyticModule;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analytics extends Model
{
    use HasFactory;

    protected $table = 'analytics';
    protected  $primaryKey = 'id';
    
    protected $fillable = [
        'analytics_type',
        'ip_address',
        'country_name',
        'region_name',
        'city_name',
        'counters',
    ];
}
