<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class deptt extends Model
{
    
    protected $fillable = ['id', 'name', 'hod', 'address','telephone','email'];
}
