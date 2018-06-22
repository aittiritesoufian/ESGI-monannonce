<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Annonce;
use Auth;

class annonceController extends Controller {
	public function show($id = "")
	{
	   	$post = Annonce::whereRaw('id = ?', [$id])->get();	
	   	$currentID = Auth::user()->id;
	   	return view('annonce', ['id' => $id, "annonce" => $post[0], 'currentUserId' => $currentID]);
	}
}
