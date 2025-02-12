<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class TestController
{

	public function __invoke(Request $request)
	{
		return response()->json([
			'project' => $request->project->name,
			'message' => 'All working!'
		]);
	}
}