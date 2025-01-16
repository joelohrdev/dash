<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealerGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
    ];

    protected function casts(): array
    {
        return [
            'uuid' => 'string',
            'name' => 'string',
        ];
    }
}
