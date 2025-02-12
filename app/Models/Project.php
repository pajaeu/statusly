<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{

	public function getAvatarUrlAttribute(): string
	{
		return 'https://api.dicebear.com/7.x/initials/svg?backgroundType=gradientLinear&fontFamily=Arial&fontSize=36&seed=' . urlencode($this->name);
	}

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function services(): HasMany
	{
		return $this->hasMany(Service::class);
	}

	public function apiKeys(): HasMany
	{
		return $this->hasMany(ApiKey::class);
	}
}
