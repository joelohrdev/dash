<?php

namespace App\Observers;

use App\Models\DealerGroup;
use Illuminate\Support\Str;

class DealerGroupObserver
{
    public function creating(DealerGroup $dealerGroup): void
    {
        $dealerGroup->uuid = Str::uuid();
    }
}
