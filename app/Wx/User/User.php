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
        'name', 'email', 'password', 'status', 'phone'
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

    public function loans()
    {
        return $this->hasMany(\Wx\Loan\Loan::class);
    }

    public function getStatusAttribute($value)
    {
        switch ($value) {
            case 0:
                return '审核中';
            case 1:
                return '通过';
            default:
                return '未通过';
        }
    }   
}
