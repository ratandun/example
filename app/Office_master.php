<?php

namespace App;

use App\Office_master;
use Illuminate\Database\Eloquent\Model;

class Office_master extends Model
{
    protected $fillable = ['id','deptt_id','office_name','hod','address','email','telephone','distt_id'];

    
}
