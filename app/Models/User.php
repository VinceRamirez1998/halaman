<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;


class User extends Authenticatable implements FilamentUser

{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;


    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

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
        'password' => 'hashed',
    ];

    /**
     * Determine if the user can access Filament.
     *
     * @return bool
     */
    public function canAccessFilament(): bool
    {
        return $this->hasRole('Admin');
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return str_ends_with($this->email, '@admin.com') && $this->hasVerifiedEmail();
    }
    

    protected static function boot()
    {
        parent::boot();

        // Set the created_at attribute before creating the record
        static::creating(function ($model) {
            $model->created_at = now()->timezone('Asia/Manila')->toDateTimeString();
        });

        static::saving(function ($user) {
            if ($user->isDirty(['name', 'email', 'password', 'department', 'role', 'permission'])) {
                $user->updated_at = now()->timezone('Asia/Manila')->toDateTimeString();
            }
        });
    }
}