<?php

namespace Wx\Loan;

use Wx\File\File;
use Illuminate\Database\Eloquent\Model;

class LoanBase extends Model
{
    public function loan()
    {
        return $this->morphOne(\Wx\Loan\Loan::class, 'loanable');
    }

    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }

    public function ScopeOfStatus($query, $status)
    {
    	return $query->whereStatus($status);
    }

    public function getStatusAttribute($value)
    {
        switch ($value) {
            case 'passed':
                return '通过';
            case 'failed':
                return '失败';
            case 'pending':
                return '待审';
            default:
                return '未知';
        }
    }

    // public function scopeOfPhoneUser($q, $phone)
    // {
    //     return $q->where('phone', $phone);
    // }
}
