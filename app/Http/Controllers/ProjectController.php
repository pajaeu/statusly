<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Models\Project;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
		DB::beginTransaction();

		try {
			$user = auth()->user();

			$project = $user->projects()->create($request->validated());

			$user->update([
				'current_project_id' => $project->id
			]);

			DB::commit();

			return to_route('dashboard');
		} catch (\Exception $e) {
			DB::rollBack();

			return back();
		}
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }

	public function switch(int $id): RedirectResponse
	{
		$project = Project::findOrFail($id);
		$user = auth()->user();

		if (!$user->hasProject($project)) {
			abort(403);
		}

		$user->update([
			'current_project_id' => $project->id
		]);

		return back();
	}
}
