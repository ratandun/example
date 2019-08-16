<?php

namespace App;

use App\deptt;
use Illuminate\Database\Eloquent\Model;

class Department_users extends Model
{
    protected $fillable = ['id','name','password','deptt_id','office_master_id','user_type'];

    public function deptt()
	{
    	return $this->belongsTo(deptt::class);
	}

	public function office()
	{
    	return $this->belongsTo(Office_master::class);
	}

}