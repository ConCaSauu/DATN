<?php

namespace App\Observers;

use App\Models\Job;
use Carbon\Carbon;
class DateObserver
{
    /**
     * Handle the Job "created" event.
     */
    public function created(Job $job): void
    {
        //
    }

    /**
     * Handle the Job "updated" event.
     */
    public function updated(Job $job): void
    {
        //
    }

    /**
     * Handle the Job "deleted" event.
     */
    public function deleted(Job $job): void
    {
        //
    }

    /**
     * Handle the Job "restored" event.
     */
    public function restored(Job $job): void
    {
        //
    }

    /**
     * Handle the Job "force deleted" event.
     */
    public function forceDeleted(Job $job): void
    {
        //
    }
    public function saving(Job $job)
    {
        // Kiểm tra exp_level và cập nhật level = 0 nếu hết hạn
        if ($job->exp_level && Carbon::parse($job->exp_level)->isPast()) {
            $job->level = 0;
        }

        // Kiểm tra exp_date và cập nhật status = 'unactive' nếu hết hạn
        if ($job->exp_date && Carbon::parse($job->exp_date)->isPast()) {
            $job->status = 'unactive';
        }
    }

}
