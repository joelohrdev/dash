<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DealerGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
    ];

    public function dealerships(): HasMany
    {
        return $this->hasMany(Dealership::class);
    }

    protected function casts(): array
    {
        return [
            'uuid' => 'string',
            'name' => 'string',
        ];
    }
}
