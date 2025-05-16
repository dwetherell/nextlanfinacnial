<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employer extends Model
{
    use HasFactory, HasUuids;

    // Table name is optional unless you want to override default
    protected $table = 'employers';

    // Use UUIDs as primary keys
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'name',
        'industry',
        'contact_name',
        'contact_email',
        'contribution_amount_monthly',
    ];

    /**
     * Get the users associated with the employer.
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'employer_id');
    }

    /**
     * Example: Scope to filter employers by industry
     */
    public function scopeInIndustry($query, $industry)
    {
        return $query->where('industry', $industry);
    }
}
