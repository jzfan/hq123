<?php

namespace Wx\Loan;

class House extends LoanBase
{
	protected $fillable = ['bought_at', 'paid_by', 'assess', 'status'];

	protected $dates = ['bought_at'];
}
