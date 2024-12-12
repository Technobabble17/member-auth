<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use StatamicRadPack\Runway\Traits\HasRunwayResource;
use App\Models\Transaction; 


class Member extends Authenticatable
{
    use HasRunwayResource;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
