<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use StatamicRadPack\Runway\Traits\HasRunwayResource;
use App\Models\Member;


class Transaction extends Model
{
    use HasRunwayResource;

    protected $fillable = [
        'member_id',
        'name',
        'date',
        'amount',
        'reference_number',
        'payment_method',
        'payment_status',
    ];

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }
}
