<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Annonce;

class annoncesController extends Controller {
	public function show()
	{
   		$annonces = Annonce::all();	
	   	return view('annonces', ['annonces' => $annonces]);
	   	/*return view('annonce', ['id' => $id, "annonce" => $post[0], 'currentUserId' => $currentID]);*/

	}

    public function search(Request $request)
    {
	   	$annonces = Annonce::whereRaw('title like ?', ['%'.$request->search.'%'])->get();
	   	return view('annonces', ['annonces' => $annonces]);
    }
}
