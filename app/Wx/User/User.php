<?php

namespace Wx\User;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status', 'phone', 'api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function file()
    {
        return $this->hasOne(\Wx\File\File::class);
    }

    public function apply()
    {
        return $this->hasOne(\Wx\Loan\Apply::class);
    }

    public function ScopeByApplyStatus($q, $status)
    {
        return $this->whereHas('apply', function ($q) use ($status) {
            $q->where('status', $status);
        });
    }

    public function cars()
    {
        return $this->hasMany(\Wx\Loan\Car::class);
    }  
}
