<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    /**
     * Get the student_profile that owns the Experience
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student_profile(): BelongsTo
    {
        return $this->belongsTo(StudentProfile::class, 'student_profile_id', 'id');
    }
    
}
