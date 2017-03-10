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
        'name', 'email', 'password', 'status', 'phone', 'api_token', 'city', 'openid', 'role'
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

    public function houses()
    {
        return $this->hasMany(\Wx\Loan\House::class);
    }

    public function fund()
    {
        return $this->hasOne(\Wx\Loan\Fund::class);
    }

    public function businesses()
    {
        return $this->hasMany(\Wx\Loan\Business::class);
    }

    public function isAdmin()
    {
        return \Auth::user()->role == 'admin';
    }

    public function isEditor()
    {
        return \Auth::user()->role == 'editor';
    }

    public function clients()
    {
        return $this->hasMany(\Wx\Agent\Client::class, 'agent_id', 'id');
    }
}
