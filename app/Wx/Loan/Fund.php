<?php

namespace Wx\Loan;

class Fund extends LoanBase
{
	protected $fillable = ['company', 'location', 'insurance', 'fund', 'worked_at', 'status'];
    protected $dates = ['worked_at'];
}
