<?php

namespace App\Observers;

use App\Models\User;
use Faker\Provider\Uuid;

class AdminObserver
{
        /**
     * Handle the User "creating" event.
     *
     * @param User $user
     * @return void
     */
    public function creating(User $user): void
    {
        $user->id = Uuid::uuid();
    }
}
