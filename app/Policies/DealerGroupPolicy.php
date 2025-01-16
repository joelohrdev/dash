<?php

namespace App\Policies;

use App\Models\DealerGroup;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DealerGroupPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool {}

    public function view(User $user, DealerGroup $dealerGroup): bool {}

    public function create(User $user): bool {}

    public function update(User $user, DealerGroup $dealerGroup): bool {}

    public function delete(User $user, DealerGroup $dealerGroup): bool {}

    public function restore(User $user, DealerGroup $dealerGroup): bool {}

    public function forceDelete(User $user, DealerGroup $dealerGroup): bool {}
}
