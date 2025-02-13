<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StoreIncidentRequest;
use App\Http\Requests\UpdateIncidentRequest;
use App\Http\Resources\IncidentResource;
use App\Models\Incident;
use Illuminate\Http\Request;

class IncidentController
{

	public function index(Request $request)
	{
		$incidents = Incident::where('project_id', $request->project->id)
			->with('service')
			->paginate();

		return IncidentResource::collection($incidents);
	}

	public function show(Request $request, int $id)
	{
		$incident = Incident::where('project_id', $request->project->id)->find($id);

		if (!$incident) {
			return response()->json([
				'message' => 'Incident not found'
			], 404);
		}

		return new IncidentResource($incident);
	}

	public function store(StoreIncidentRequest $request)
	{
		$incident = Incident::create([
			'message' => $request->message,
			'service_id' => $request->service_id,
			'project_id' => $request->project->id
		]);

		return response()->json(new IncidentResource($incident), 201);
	}

	public function update(UpdateIncidentRequest $request, int $id)
	{
		$incident = Incident::where('project_id', $request->project->id)->find($id);

		if (!$incident) {
			return response()->json([
				'message' => 'Incident not found'
			], 404);
		}

		$incident->fill($request->validated())->save();

		return new IncidentResource($incident);
	}

	public function destroy(Request $request, int $id)
	{
		$incident = Incident::where('project_id', $request->project->id)->find($id);

		if (!$incident) {
			return response()->json([
				'message' => 'Incident not found'
			], 404);
		}

		$incident->delete();

		return response()->json('Incident was deleted');
	}
}