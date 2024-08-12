<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'password',
        'phone',
        'email',
        'role',
        'avatar',
        'join_date',
        'status',
        'role_name',
        'gender',
        'current_address',
        'permanent_address',
        'position',
        'department',
        'bio',
        'last_seen',
    ];

    protected $guard_name = 'web';

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function restaurant()
    {
        return $this->hasOne(Restaurant::class);
    }

    public function client()
    {
        return $this->hasOne(Client::class);
    }

    public function countries()
    {
        return $this->hasMany(Country::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles');
    }

    // /**
    // * Get all users associated with the role.
    // *
    // * @return BelongsToMany
    // */
    // public function users(): BelongsToMany
    // {
    //     return $this->belongsToMany(User::class, 'user_roles');
    // }

    protected static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $getUser = self::orderBy('user_id', 'desc')->first();

            if ($getUser) {
                $latestID = intval(substr($getUser->user_id, 3));
                $nextID = $latestID + 1;
            } else {
                $nextID = 1;
            }
            $model->user_id = '000' . sprintf("%03s", $nextID);

            while (self::where('user_id', $model->user_id)->exists()) {
                $nextID++;
                $model->user_id = '000' . sprintf("%03s", $nextID);
            }
        });
    }

    public function getProfileImageAttribute()
    {
        return $this->attributes['avatar'] ?? 'assets/img/profiles/default-avatar.jpg';
    }

    public function getIsOnlineAttribute()
    {
        return isset($this->attributes['last_seen']) && $this->attributes['last_seen'] > now()->subMinutes(5);
    }
}