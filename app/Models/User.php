<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'avatar'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value)
    {
        if ($value)
            return asset('storage/' . $value);

        return "https://i.pravatar.cc/150?img=2";
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function timeline()
    {
        $ids = $this->follows()->pluck('id');
        $ids = $ids->push($this->id);
        return Tweet::whereIn('user_id', $ids)
            ->withLikes()
            ->latest()
            ->get();
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class)->withLikes()->latest();
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function toggleFollow(User $user)
    {
        if ($this->isFollowing($user)) {
            return $this->unfollow($user);
        }

        return $this->follow($user);
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function isFollowing(User $user)
    {
        return $this->follows()
            ->where('following_user_id', [$user->id, $this->id])
            ->exists();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
