<?php

namespace Wx\Loan;

class Car extends LoanBase
{
	protected $fillable = ['brand', 'plate_number', 'bought_at', 'paid_by', 'status'];

	protected $dates = ['bought_at'];
}
