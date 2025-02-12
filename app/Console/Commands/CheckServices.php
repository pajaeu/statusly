<?php

namespace App\Console\Commands;

use App\Jobs\CheckServiceStatus;
use App\Models\Service;
use Illuminate\Console\Command;

class CheckServices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-services';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check service statuses';

    /**
     * Execute the console command.
     */
    public function handle(): void
	{
        $services = Service::whereNotNull('url')->get();

		foreach ($services as $service) {
			CheckServiceStatus::dispatch($service);

			$this->info("Checking service {$service->name} status...");
		}

		$this->info('All services have been checked out');
    }
}
