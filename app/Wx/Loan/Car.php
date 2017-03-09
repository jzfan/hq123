<?php

namespace Wx\Loan;

class Car extends LoanBase
{
	protected $fillable = ['user_id', 'loan', 'duration', 'brand', 'plate_number', 'location', 'bought_at', 'paid_by', 'status'];

	protected $dates = ['bought_at'];
}
