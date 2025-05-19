<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Organization extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'organizations';

    protected $keyType = 'string'; // UUID
    public $incrementing = false;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'logo_path',
    ];

    /**
     * Users that belong to this organization.
     */
    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('role')
            ->withTimestamps();
    }

    /**
     * Organization owners only.
     */
    public function owners()
    {
        return $this->users()->wherePivot('role', 'owner');
    }


    /**
     * Get the route key for Laravel model binding.
     * Enables routes like /organizations/{slug}
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
