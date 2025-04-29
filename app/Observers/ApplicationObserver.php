<?php

namespace App\Observers;

use App\Mail\ApplicationStatusChanged;
use App\Models\Application;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class ApplicationObserver
{
    /**
     * Handle the Application "created" event.
     */
    public function created(Application $application): void
    {
        //
    }

    /**
     * Handle the Application "updated" event.
     */
    public function updated(Application $application): void
    {
        // Trong Observer
        if ($application->isDirty('status') && 
            in_array($application->status, ['approved', 'rejected'])) {
            // Chỉ gửi email khi chuyển sang các trạng thái quan trọng
            $status = $application->status;
            $user = User::find($application->uid);
            if($user){
                Mail::to($user->email)->send(new ApplicationStatusChanged($application,$user,$status));
            }
        }
    }

    /**
     * Handle the Application "deleted" event.
     */
    public function deleted(Application $application): void
    {
        //
    }

    /**
     * Handle the Application "restored" event.
     */
    public function restored(Application $application): void
    {
        //
    }

    /**
     * Handle the Application "force deleted" event.
     */
    public function forceDeleted(Application $application): void
    {
        //
    }
}
