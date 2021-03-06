<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Annonce extends Model
{
	public function category(){
		return $this->belongsTo(Category::class);
	}

	public function user(){
		return $this->belongsTo(User::class, Auth::user()->id);
	}

	public function userList(){
		return User::where('id', Auth::user()->id)->get();
	}
}
