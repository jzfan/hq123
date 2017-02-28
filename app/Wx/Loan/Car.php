<?php

namespace Wx\Loan;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded = [];

    public function user()
    {
    	return $this->hasOne(\Wx\User\User::class);
    }

    public function ScopeOfStatus($query, $status)
    {
    	return $query->whereStatus($status);
    }
}
