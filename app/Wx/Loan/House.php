<?php

namespace Wx\Loan;

class House extends LoanBase
{
	protected $fillable = ['user_id', 'loan', 'duration', 'bought_at', 'paid_by', 'assess', 'status'];

	protected $dates = ['bought_at'];
}
