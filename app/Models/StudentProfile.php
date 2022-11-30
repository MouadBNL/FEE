<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StudentProfile extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    protected $casts = [
        'links' => 'array',
        'hobbies' => 'array',
        'skills' => 'array',
        'languages' => 'array'
    ];

    /**
     * Get the user that owns the StudentProfile
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get all of the experiences for the StudentProfile
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function experiences(): HasMany
    {
        return $this->hasMany(Experience::class, 'student_profile_id', 'id');
    }

    /**
     * Get all of the projects for the StudentProfile
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class, 'student_profile_id', 'id');
    }

    /**
     * Get all of the educations for the StudentProfile
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function education(): HasMany
    {
        return $this->hasMany(Education::class, 'student_profile_id', 'id');
    }

    /**
     * Get all of the certifications for the StudentProfile
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function certifications(): HasMany
    {
        return $this->hasMany(Certification::class, 'student_profile_id', 'id');
    }
    
}
