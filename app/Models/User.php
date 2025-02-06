<?php

namespace App\Models;

use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustBeVerified;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustBeVerified
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, MustVerifyEmail;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
		'current_project_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

	public function getAvatarUrlAttribute(): string
	{
		return 'https://api.dicebear.com/7.x/initials/svg?backgroundType=gradientLinear&fontFamily=Arial&fontSize=36&seed=' . urlencode($this->name);
	}

	public function hasProject(Project $project): bool
	{
		return $this->projects->contains($project);
	}

	public function projects(): HasMany
	{
		return $this->hasMany(Project::class);
	}

	public function currentProject(): BelongsTo
	{
		return $this->belongsTo(Project::class, 'current_project_id');
	}
}
