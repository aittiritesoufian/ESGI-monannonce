<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

public function show($search = "")
{
   	$posts = Post::whereRaw('content like ?', ['%'.$search.'%'])->get();	
   	return view('show', ['search' => $search, "posts" => $posts]);
}