<?php

namespace App\Http\Middleware\Api;

use App\Models\ApiKey;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
		$token = $request->bearerToken();

		if (!$token) {
			return response()->json([
				'message' => 'Missing auth token'
			], 401);
		}

		$apiKey = ApiKey::where('token', $token)
			->with('project')
			->first();

		if (!$apiKey) {
			return response()->json([
				'message' => 'Invalid auth token'
			], 401);
		}

		$request->merge([
			'project' => $apiKey->project,
		]);

        return $next($request);
    }
}
