<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();
        static::created(function (User $user) {
            $user->generateProfile();
        });
    }

    public function scopeStudent($query)
    {
        return $query->where('type', 'student');
    }

    public function scopeCompany($query)
    {
        return $query->where('type', 'company');
    }

    public function getProfileAttribute()
    {
        if($this->type=="company") {
            return $this->companyProfile;
        } else {
            return $this->studentProfile;
        }
    }

    /**
     * Get the studentProfile associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function studentProfile(): HasOne
    {
        return $this->hasOne(StudentProfile::class);
    }

    /**
     * Get the companyProfile associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function companyProfile(): HasOne
    {
        return $this->hasOne(CompanyProfile::class);
    }

    public function checkProfile()
    {
        return isset($this->profile);
    }

    public function generateProfile(): Void
    {
        if ($this->type == 'student') {
            $this->studentProfile()->create([
                'links' => [],
                'skills' => [],
                'languages' => [],
                'hobbies' => [],
            ]);
        } else if ($this->type == 'company') {
            $this->companyProfile()->create();
        }
    }
}
