<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thesis extends Model
{
	public function uniName()
	{
		return $this->belongsTo('App\Models\University', 'uni_id');
	}
	public function deptName()
	{
		return $this->belongsTo('App\Models\Department', 'uni_id')->select('dept_name','id');
	}
	public function catName()
	{
		return $this->belongsTo('App\Models\Category', 'uni_id')->select('cat_name','id');
	}
}
