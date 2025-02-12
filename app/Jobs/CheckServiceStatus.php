<?php

namespace App\Jobs;

use App\Enums\ServiceStatus;
use App\Models\Incident;
use App\Models\Service;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Http;

class CheckServiceStatus implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(private readonly Service $service)
    {
        //
    }

	public function handle(): void
	{
		$statusCode = $this->checkService($this->service->url);

		if ($statusCode === 200 && $this->service->status !== ServiceStatus::OPERATIONAL->value) {
			$this->service->setStatus(ServiceStatus::OPERATIONAL);
		}

		if (in_array($statusCode, [500, 503])) {
			$this->service->setStatus( ServiceStatus::DOWN);

			$this->logIncident($this->service, $statusCode);
		}
	}

	private function checkService($url): int
	{
		try {
			$response = Http::timeout(5)->get($url);

			return $response->status();
		} catch (\Exception $e) {
			return 0;
		}
	}

	private function logIncident(Service $service, int $statusCode): void
	{
		Incident::create([
			'service_id' => $service->id,
			'status' => 'down',
			'message' => "{$statusCode}: {$service->name} is currently down",
		]);
	}
}
