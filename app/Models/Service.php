<?php

namespace App\Models;

use App\Enums\ServiceStatus;
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

	public function changeStatus(ServiceStatus $status): void
	{
		$this->update(['status' => $status->value]);
	}
}
