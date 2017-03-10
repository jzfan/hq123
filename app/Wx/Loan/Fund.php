<?php

namespace Wx\Loan;

class Fund extends LoanBase
{
	protected $fillable = ['loan', 'duration', 'company', 'location', 'insurance', 'fund', 'worked_at', 'status', 'user_id', 'mark'];
    protected $dates = ['worked_at'];
}
