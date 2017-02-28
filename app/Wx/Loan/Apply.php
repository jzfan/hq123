<?php

namespace Wx\Loan;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $guarded = [];

    protected $dates = ['worked_since'];

    public function user()
    {
    	return $this->belongsTo(\Wx\User\User::class);
    }

    public function files()
    {
        return $this->hasMany(\Wx\File\File::class);
    }

    public function ScopeOfStatus($query, $status)
    {
    	return $query->whereStatus($status);
    }

    public function ScopeOfProfession($query, $pro)
    {
        return $query->whereProfession($pro);
    }
}
