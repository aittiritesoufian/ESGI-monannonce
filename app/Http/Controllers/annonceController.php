<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Annonce;
use App\User;
use Auth;

class annonceController extends Controller {
	public function show($id = "")
	{
	   	$post = Annonce::whereRaw('id = ?', [$id])->get();	
   		if (Auth::user() != null) {
		   $currentID = Auth::user()->id;   	
		   $user =  User::where('id', $currentID)->get()[0];
		}
		else {
		   $currentID = NULL;
		   $user = null; 	
		}
	   	return view('annonce', ['id' => $id, "annonce" => $post[0], 'currentUserId' => $currentID, 'user' => $user]);
	}
}
