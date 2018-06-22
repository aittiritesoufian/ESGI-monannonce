<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Annonce;

class annonceController extends Controller {
	public function show($id = "")
	{
	   	$post = Annonce::whereRaw('id = ?', [$id])->get();	
	   	return view('annonce', ['id' => $id, "annonce" => $post]);
	}
}
