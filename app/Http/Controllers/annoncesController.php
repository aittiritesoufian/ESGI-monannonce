<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Annonce;

class annoncesController extends Controller {
	public function show()
	{
	   	$annonces = Annonce::all();	
	   	return view('annonces', ['annonces' => $annonces]);
	   	/*return view('annonce', ['id' => $id, "annonce" => $post[0], 'currentUserId' => $currentID]);*/

	}
}
