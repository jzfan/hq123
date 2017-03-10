<?php

namespace Wx\Agent;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['loan', 'duration', 'name', 'phone', 'car', 'house', 'fund', 'insurance'];
}
