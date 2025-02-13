<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController
{

	public function index(Request $request)
	{
		$services = Service::where('project_id', $request->project->id)
			->latest()
			->paginate();

		return ServiceResource::collection($services);
	}

	public function show(Request $request, int $id)
	{
		$service = Service::where('project_id', $request->project->id)->find($id);

		if (!$service) {
			return response()->json([
				'message' => 'Service not found'
			], 404);
		}

		return new ServiceResource($service);
	}

	public function store(StoreServiceRequest $request)
	{
		$service = Service::create([
			'name' => $request->name,
			'status' => $request->status,
			'project_id' => $request->project->id
		]);

		return response()->json(new ServiceResource($service), 201);
	}

	public function update(UpdateServiceRequest $request, int $id)
	{
		$service = Service::where('project_id', $request->project->id)->find($id);

		if (!$service) {
			return response()->json([
				'message' => 'Service not found'
			], 404);
		}

		$service->fill($request->validated())->save();

		return new ServiceResource($service);
	}

	public function destroy(Request $request, int $id)
	{
		$service = Service::where('project_id', $request->project->id)->find($id);

		if (!$service) {
			return response()->json([
				'message' => 'Service not found'
			], 404);
		}

		$service->delete();

		return response()->json('Service was deleted');
	}
}