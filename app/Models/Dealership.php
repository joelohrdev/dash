<?php

namespace App\Models;

use App\Enums\State;
use App\Observers\DealershipObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[ObservedBy(DealershipObserver::class)]
class Dealership extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'dealer_group_id',
        'name',
        'address',
        'city',
        'state',
        'postal_code',
    ];

    public function dealerGroup(): BelongsTo
    {
        return $this->belongsTo(DealerGroup::class);
    }

    protected function casts(): array
    {
        return [
            'uuid' => 'string',
            'dealer_group_id' => 'integer',
            'name' => 'string',
            'address' => 'string',
            'city' => 'string',
            'state' => State::class,
            'postal_code' => 'string',
        ];
    }
}
