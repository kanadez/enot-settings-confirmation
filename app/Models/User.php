<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{

    use Notifiable;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'telegram',
        'phone'
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
    ];

    public function toAuth(): array
    {
        $user = $this->only(['id', 'name', 'email']);
        $user['has_admin_access'] = false;

        return $user;
    }

    public function settings()
    {
        return $this->hasMany(Setting::class);
    }

    /**
     * Берет из настроек юзера предпочитительный канал уведомлений
     *
     * @return string
     */
    public function preferredNotifyWay(): string // TODO сделать подсос из настроек способа уведомлений
    {
        return 'telegram';
    }
}

