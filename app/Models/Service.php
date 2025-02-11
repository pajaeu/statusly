<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{

	public function project(): BelongsTo
	{
		return $this->belongsTo(Project::class);
	}

	public function incidents(): HasMany
	{
		return $this->hasMany(Incident::class);
	}
}
