<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Job;
use Carbon\Carbon;
class UpdateJobStatusCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-job-status-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update job level and status based on exp_level and exp_date';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $now = Carbon::now();

        // Cập nhật level = 0 nếu exp_level đã hết hạn
        Job::where('exp_level', '<', $now)
            ->where('level', '!=', 0)
            ->update(['level' => 0]);

        // Cập nhật status = 'unactive' nếu exp_date đã hết hạn
        Job::where('exp_date', '<', $now)
            ->where('status', '!=', 'unactive')
            ->update(['status' => 'unactive']);

        $this->info('Job levels and statuses updated successfully.');
    }
}
