<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ideas()
    {
        return $this->hasMany(Idea::class);
    }

    public function getAvatar()
    {
        $firstChar = $this->email[0];

        $intToUse = is_numeric($firstChar) 
            ? ord(strtolower($firstChar)) - 21
            : ord(strtolower($firstChar)) - 96;

        return 'https://s.gravatar.com/avatar/'.
            md5($this->email).
            '?s=200'.
            '&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-'.
            $intToUse.
            '.png';
    }
}
