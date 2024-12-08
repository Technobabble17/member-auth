<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use StatamicRadPack\Runway\Traits\HasRunwayResource;

class Member extends Authenticatable
{
    use HasRunwayResource;
    
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
