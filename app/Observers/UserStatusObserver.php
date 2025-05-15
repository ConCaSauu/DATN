<?php

namespace App\Observers;

use App\Mail\UserStatusNotification;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class UserStatusObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        //
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        if ($user->isDirty('status') && 
            in_array($user->status, ['lock'])) {
            // Chỉ gửi email khi chuyển sang các trạng thái quan trọng
            Mail::to($user->email)->send(new UserStatusNotification($user));
        }
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
