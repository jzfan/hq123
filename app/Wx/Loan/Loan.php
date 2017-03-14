<?php

namespace Wx\Loan;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = ['amount', 'duration', 'city', 'name', 'phone', 'loanable_id', 'loanable_type'];

    public function loanable()
    {
    	return $this->morphTo();
    }
}
