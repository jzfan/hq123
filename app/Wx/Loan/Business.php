<?php

namespace Wx\Loan;

class Business extends LoanBase
{
    protected $fillable = ['user_id', 'loan', 'duration', 'company', 'house', 'registered_at', 'share', 'annual_turnover', 'status'];

    protected $dates = ['registered_at'];
}
