<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model{
	protected $table = 'user';

	public function x(){
		return $this->hasMany('App\comment','users_id');
	}
}
