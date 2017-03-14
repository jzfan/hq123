<?php

namespace Wx\Loan;

class Business extends LoanBase
{
    protected $fillable = ['company', 'house', 'registered_at', 'share', 'annual_turnover', 'status'];

    protected $dates = ['registered_at'];
}
