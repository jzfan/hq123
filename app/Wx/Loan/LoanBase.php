<?php

namespace Wx\Loan;

use Wx\File\File;
use Illuminate\Database\Eloquent\Model;

class LoanBase extends Model
{
    public function user()
    {
    	return $this->belongsTo(\Wx\User\User::class);
    }

    public function ScopeOfStatus($query, $status)
    {
    	return $query->whereStatus($status);
    }

    public function files()
    {
    	return $this->morphMany(File::class, 'fileable');
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

    public function scopeMy($q)
    {
        return $q->where('user_id', \Auth::user()->id);
    }

    public function scopeLast($q)
    {
        return $q->orderBy('id', 'desc')->first();
    }
}
